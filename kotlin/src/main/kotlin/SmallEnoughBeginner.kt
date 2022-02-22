fun smallEnough(a : IntArray, limit : Int) : Boolean {
    for (i in a) {
        if (i > limit) {
            return false
        }
    }
    return true
}
