/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
// const barConfig = {
//   type: 'bar',
//   data: {
//     labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
//     datasets: [
//       {
//         label: 'Shoes',
//         backgroundColor: '#0694a2',
//         // borderColor: window.chartColors.red,
//         borderWidth: 1,
//         data: [14, 52, 74, 33, 90, 70,100],
//       },
//       {
//         label: 'Bags',
//         backgroundColor: '#7e3af2',
//         borderColor: window.chartColors.blue,
//         borderWidth: 1,
//         data: [66, 33, 43, 12, 54, 62, 84,100],
//       },
      
//     ],
//   },
//   options: {
//     responsive: true,
//     legend: {
//       display: false,
//     },
//   },
// }

// const barsCtx = document.getElementById('bars')
// window.myBar = new Chart(barsCtx, barConfig)












window.myBar = new Chart(document.getElementById('bars'),
  {
    type: 'bar',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        // {
        //   label: 'Shoes',
        //   backgroundColor: '#0694a2',
        //   // borderColor: window.chartColors.red,
        //   borderWidth: 1,
        //   data: [14, 52, 74, 33, 90, 70,100],
        // },
        {
          label: 'Bags',
          backgroundColor: '#7e3af2',
          // borderColor: window.chartColors.blue,
          borderWidth: 1,
          data: [66, 33, 43, 12, 54, 62, 84,100],
        },
        
      ],
    },
    options: {
      responsive: true,
      legend: {
        display: false,
      },
    },
  }
)






window.myBar = new Chart(document.getElementById('bars1'),
  {
    type: 'bar',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        // {
        //   label: 'Shoes',
        //   backgroundColor: '#0694a2',
        //   // borderColor: window.chartColors.red,
        //   borderWidth: 1,
        //   data: [14, 52, 74, 33, 90, 70,100],
        // },
        {
          label: 'Bags',
          backgroundColor: '#7e3af2',
          // borderColor: window.chartColors.blue,
          borderWidth: 1,
          data: [66, 33, 43, 12, 54, 62, 84,100],
        },
        
      ],
    },
    options: {
      responsive: true,
      legend: {
        display: false,
      },
    },
  }
)




window.myBar = new Chart(document.getElementById('bars2'),
  {
    type: 'bar',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        // {
        //   label: 'Shoes',
        //   backgroundColor: '#0694a2',
        //   // borderColor: window.chartColors.red,
        //   borderWidth: 1,
        //   data: [14, 52, 74, 33, 90, 70,100],
        // },
        {
          label: 'Bags',
          backgroundColor: '#7e3af2',
          // borderColor: window.chartColors.blue,
          borderWidth: 1,
          data: [66, 33, 43, 12, 54, 62, 84,100],
        },
        
      ],
    },
    options: {
      responsive: true,
      legend: {
        display: false,
      },
    },
  }
)
