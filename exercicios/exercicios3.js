export const gigasecond = (data) => {
  const dataEmMiliSegundos = data.getTime();

  const novaData = dataEmMiliSegundos + 1_000_000_000_000;

  const result = new Date(novaData);

  return result;
};
