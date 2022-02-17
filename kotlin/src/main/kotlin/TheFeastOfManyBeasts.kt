fun feast(beast: String, dish: String): Boolean {
    if (checkTheInitialChar(beast, dish) && checkTheFinalChar(beast, dish)) {
        return true;
    }
    return false;
}
fun checkTheInitialChar(beast: String, dish: String): Boolean {
    if (beast[0].compareTo(dish[0]) == 0) {
        return true;
    }
    return false;
}

fun checkTheFinalChar(beast: String, dish: String): Boolean {
    if (beast[(beast.length - 1)].compareTo(dish[(dish.length - 1)]) == 0) {
        return true;
    }
    return false;
}
