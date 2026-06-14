<script setup>
import { ref } from 'vue';

const props = defineProps({
  message: {
    type: String,
    required: true,
  },
});

const emit = defineEmits({
  'update-message': (value) => typeof value === 'string' && value.trim().length > 0,
});

const localMessage = ref('');

function sendMessageToParent() {
  const nextMessage = localMessage.value.trim();

  if (!nextMessage) {
    return;
  }

  emit('update-message', nextMessage);
  localMessage.value = '';
}
</script>

<template>
  <section class="child-card">
    <h2>Componente hijo</h2>
    <p>
      Dato recibido desde el padre:
      <strong>{{ props.message }}</strong>
    </p>

    <form @submit.prevent="sendMessageToParent">
      <input
        v-model="localMessage"
        type="text"
        placeholder="Nuevo mensaje para el padre"
        aria-label="Nuevo mensaje para el padre"
      />
      <button type="submit">Enviar al padre</button>
    </form>
  </section>
</template>
