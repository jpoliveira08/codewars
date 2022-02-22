fun countPositivesSumNegatives(input : Array<Int>?) : Array<Int> {
    var countOfPositives: Int = 0
    var sumOfNegatives: Int = 0

    if (input.isNullOrEmpty()) {
        return arrayOf()
    }
    for (number in input) {
        countOfPositives += countPositives(number)
        sumOfNegatives += sumNegatives(number);
    }

    return arrayOf(countOfPositives, sumOfNegatives)
}

fun countPositives(number: Int):Int {
    if (number > 0) {
        return 1
    }
    return 0
}

fun sumNegatives(number: Int): Int {
    var sumOfNegatives: Int = 0
    if (number < 0) {
        return number
    }
    return 0
}

