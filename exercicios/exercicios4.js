export const age = (planet, seconds) => {
  const earthYearInSeconds = 31_557_600;

  const orbitalPeriods = {
    mercury: 0.2408467,
    venus: 0.61519726,
    earth: 1,
    mars: 1.8808158,
    jupiter: 11.862615,
    saturn: 29.447498,
    uranus: 84.016846,
    neptune: 164.79132,
  };

  if (!(planet in orbitalPeriods)) {
    throw new Error("not a planet");
  }

  const orbitalPeriod = orbitalPeriods[planet];

  const idade =
    seconds / (earthYearInSeconds * orbitalPeriod);

  return Number(idade.toFixed(2));
};