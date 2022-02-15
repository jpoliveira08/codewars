object Kata {
    fun digitize(n:Long):IntArray {
        val convertingLongIntoChararray = n.toString().toCharArray()
        val arrayRealPositions = (convertingLongIntoChararray.size - 1)
        var result = IntArray(convertingLongIntoChararray.size)
        for ((index, value) in convertingLongIntoChararray.withIndex()) {
            result[index] = convertingLongIntoChararray[arrayRealPositions - index].digitToInt()
        }
        return result;
    }
}