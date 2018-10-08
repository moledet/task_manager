import DS from 'ember-data';

export default DS.Model.extend({
    "status_id": DS.attr('number'),
    "title": DS.attr('string'),
    "description": DS.attr('string'),
    "created_at": DS.attr('date', {
        defaultValue() { return new Date(); }
    }),
    "updated_at":DS.attr('date', {
        defaultValue() { return new Date(); }
    }),
    isDone:function(){
        return `this.status_id > 1`;
    }
});
