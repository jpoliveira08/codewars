fun evaporator(content: Double, evap_per_day: Double, threshold: Double): Int {
    var countDays: Int = 0
    var percentage: Double = 100.0
    while(percentage > threshold) {
        percentage -= (percentage * evap_per_day/100)
        countDays++
    }

    return countDays;
}
