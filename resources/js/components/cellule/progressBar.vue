<template>
    <div class="progress-bar-container">
      <div class="progress-bar">
        <div class="progress-bar-fill" :style="{ width: fillPercentage + '%' }">
          <span class="progress-bar-label">{{ fillPercentage }}%</span>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    name: 'ProgressBar',
    props: {
      fillPercentage: {
        type: Number,
        required: true,
        validator: value => value >= 0 && value <= 100,
      },
    },
  };
  </script>

  <style scoped>
  .progress-bar-container {
    width: 100%;
    height: 20px;
    background-color: #f2f2f2;
    border-radius: 10px;
  }

  .progress-bar {
    height: 100%;
    background-color: #0a9fd1;
    border-radius: 10px;
    transition: width 0.3s ease-in-out;
  }

  .progress-bar-fill {
    height: 100%;
    background-color: #3ba872;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .progress-bar-label {
    color: #fff;
    font-size: 12px;
    font-weight: bold;
  }
  </style>
