fun getCount(str : String) : Int {
    var countVowels: Int = 0;
    for (i in str) {
        countVowels += isVowel(i)
    }

    return countVowels
}

fun isVowel(ch: Char): Int {
    val vowels: List<Char> = listOf('a', 'e', 'i', 'o', 'u')
    if (vowels.contains(ch)) {
        return 1;
    }

    return 0;
}

fun main() {
    println(getCount("abracadabra"))
}