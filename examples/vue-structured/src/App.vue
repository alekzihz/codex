<script setup>
import { ref } from 'vue';
import ChildMessage from './components/ChildMessage.vue';

const parentMessage = ref('Hola desde el padre estructurado');

function updateParentMessage(newMessage) {
  parentMessage.value = newMessage;
}
</script>

<template>
  <main class="app-shell">
    <h1>Versión estructurada con .vue</h1>
    <p>
      El componente padre guarda el estado, lo envía al hijo con props y escucha
      el evento <strong>update-message</strong> para actualizarlo.
    </p>

    <p class="state">
      <span>Estado del padre:</span>
      <strong>{{ parentMessage }}</strong>
    </p>

    <ChildMessage
      :message="parentMessage"
      @update-message="updateParentMessage"
    />
  </main>
</template>
