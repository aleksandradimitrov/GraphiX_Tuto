const Ziggy = {
  url: 'http:\/\/localhost',
  port: null,
  defaults: {
  },
  routes: {
    'login': {
      uri: 'login', methods: ['GET', 'HEAD'],
    },
    'logout': {
      uri: 'logout', methods: ['POST'],
    },
    'password.request': {
      uri: 'forgot-password', methods: ['GET', 'HEAD'],
    },
    'password.reset': {
      uri: 'reset-password\/{token}', methods: ['GET', 'HEAD'],
    },
    'password.email': {
      uri: 'forgot-password', methods: ['POST'],
    },
    'password.update': {
      uri: 'reset-password', methods: ['POST'],
    },
    'register': {
      uri: 'register', methods: ['GET', 'HEAD'],
    },
    'user-profile-information.update': {
      uri: 'user\/profile-information', methods: ['PUT'],
    },
    'user-password.update': {
      uri: 'user\/password', methods: ['PUT'],
    },
    'password.confirmation': {
      uri: 'user\/confirmed-password-status', methods: ['GET', 'HEAD'],
    },
    'password.confirm': {
      uri: 'user\/confirm-password', methods: ['POST'],
    },
    'profile.show': {
      uri: 'user\/profile', methods: ['GET', 'HEAD'],
    },
    'other-browser-sessions.destroy': {
      uri: 'user\/other-browser-sessions', methods: ['DELETE'],
    },
    'current-user-photo.destroy': {
      uri: 'user\/profile-photo', methods: ['DELETE'],
    },
    'current-user.destroy': {
      uri: 'user', methods: ['DELETE'],
    },
    'sanctum.csrf-cookie': {
      uri: 'sanctum\/csrf-cookie', methods: ['GET', 'HEAD'],
    },
    'ignition.healthCheck': {
      uri: '_ignition\/health-check', methods: ['GET', 'HEAD'],
    },
    'ignition.executeSolution': {
      uri: '_ignition\/execute-solution', methods: ['POST'],
    },
    'ignition.updateConfig': {
      uri: '_ignition\/update-config', methods: ['POST'],
    },
    'video.index': {
      uri: 'videos', methods: ['GET', 'HEAD'],
    },
    'video.show': {
      uri: 'videos\/{video}',
      methods: ['GET', 'HEAD'],
      bindings: {
        video: 'id',
      },
    },
    'about': {
      uri: 'about', methods: ['GET', 'HEAD'],
    },
    'forum': {
      uri: 'forum', methods: ['GET', 'HEAD'],
    },
  },
}

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined')
  Object.assign(Ziggy.routes, window.Ziggy.routes)

export { Ziggy }
