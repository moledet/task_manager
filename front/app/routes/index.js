import Route from '@ember/routing/route';

export default Route.extend({
    model() {
      const tasks = this.store.findAll('task');
  
      const newTasks =  this.get('store').query('task', { status_id: 1 });

      const done =  this.get('store').query('task', { status_id: 2 });

          

        return {'list': tasks, 'newTasks': newTasks, 'done':done};
    }
});
