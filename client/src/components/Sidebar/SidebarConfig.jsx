export default {
    items: [
      {
        name: 'Home',
        url: '/dashboard',
        icon: 'fa fa-home fa-lg',
        badge: {
          variant: 'info',
          text: 'NEW',
        },
      },
      {
        divider: true,
      },
      {
        title: true,
        name: 'Management',
      },
      {
        name: 'Candidates',
        icon: 'fa fa-users fa-lg',
        children: [
          {
            name: 'My Candidates',
            url: '/candidate/mine',
            icon: 'fa fa-user fa-lg'
          },
          {
            name: 'All Candidates',
            url: '/candidate/all',
            icon: 'fa fa-users fa-lg'
          }
        ]
      },
      {
        name: 'Management',
        icon: 'fa fa-wrench fa-lg',
        children: [
          {
            name: 'Role Management',
            url: '/management/role',
            icon: 'fa fa-usb fa-lg'
          },
          {
            name: 'Team Management',
            url: '/management/team',
            icon: 'fa fa-users fa-lg'
          }
        ]
      },
      {
        name: 'Leave Requests',
        icon: 'fa fa-calendar fa-lg',
        children: [
          {
            name: 'My Requests',
            url: '/leave-request/mine',
            icon: 'fa fa-calendar-check-o fa-lg'
          },
          {
            name: 'All Requests',
            url: '/leave-request/all',
            icon: 'fa fa-calendar fa-lg'
          }
        ]
      },
      {
        name: 'Events',
        icon: 'fa fa-star fa-lg',
        url: '/event/all'
      }
    ]
  };
  