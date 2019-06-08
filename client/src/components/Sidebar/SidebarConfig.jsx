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
        name: 'Team Management',
        icon: 'fa fa-users fa-lg',
        url: '/team'
      },
      {
        name: 'Configuration',
        icon: 'fa fa-wrench fa-lg',
        url: '/configuration'
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
        name: 'Chat',
        icon: 'fa fa-comments-o fa-lg',
        children: [
          {
            name: 'Individual',
            url: '/chat/individual',
            icon: 'fa fa-comment fa-lg'
          },
          {
            name: 'Group',
            url: '/chat/group',
            icon: 'fa fa-comments fa-lg'
          }
        ]
      },
      {
        name: 'Drink order',
        icon: 'fa fa-beer fa-lg',
        url: '/drink-order'
      },
      {
        name: 'Events',
        icon: 'fa fa-star fa-lg',
        url: '/event/all'
      }
    ]
  };
  