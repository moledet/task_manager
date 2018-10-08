import Component from '@ember/component';

export default Component.extend({
    store: Ember.inject.service(),
    actions: {
        addTask(event){
            let task = this.get('store').createRecord('task', {
                status_id: 1,
                title:  'משימה '+String.fromCodePoint(Math.floor(Math.random() * (90 - 65) + 65)).toUpperCase(),
                description:'Lorem ipsum'
              });

            task.save();
        },
        deleteTask(task){
            task.deleteRecord();
            task.save();            
        },
        markDoneTask(task){
            task.status_id=2;
            task.save();  
        }
      }
});
