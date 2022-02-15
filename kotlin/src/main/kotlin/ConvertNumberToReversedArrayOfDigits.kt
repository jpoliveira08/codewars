fun main() {
    var numero: Long = 789654;
    var numeroEmTexto = numero.toString().toCharArray()
    var teste = (numeroEmTexto.size - 1)
    var essevai = IntArray(numeroEmTexto.size)
    for ((index, value) in numeroEmTexto.withIndex()) {
        essevai[index] = numeroEmTexto[teste - index].digitToInt()
        println(essevai[index])
    }



}
object Kata {
    fun digitize(n: Long): IntArray {
        val convertingLongIntoChararray = n.toString().toCharArray()
        val arrayRealPositions = (convertingLongIntoChararray.size - 1)
        var result = intArray(convertingLongIntoChararray.size)
        for ((index, value) in convertingLongIntoChararray.withIndex()) {
            result[index] = convertingLongIntoChararray[arrayRealPositions - index].digitToInt()
        }
        return result;
    }
}