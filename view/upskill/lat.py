import random

def choose_random_word():
    words = ['python', 'gudang', 'komputer', 'program', 'teknologi', 'inteligensi']
    return random.choice(words)

def display_word(word, guessed_letters):
    display = ''
    for letter in word:
        if letter in guessed_letters:
            display += letter
        else:
            display += '_'
    return display

def is_game_over(word, guessed_letters):
    for letter in word:
        if letter not in guessed_letters:
            return False
    return True

def main():
    print("Selamat datang di game Tebak Huruf!")
    word_to_guess = choose_random_word()
    guessed_letters = set()
    attempts = 6

    while attempts > 0:
        print(f"\nKata yang harus Anda tebak: {display_word(word_to_guess, guessed_letters)}")
        guess = input("Masukkan huruf tebakan Anda: ").lower()

        if guess in guessed_letters:
            print("Anda sudah menebak huruf ini sebelumnya.")
        else:
            guessed_letters.add(guess)
            if guess in word_to_guess:
                print("Selamat! Huruf tersebut ada dalam kata.")
                if is_game_over(word_to_guess, guessed_letters):
                    print(f"\nAnda berhasil! Kata yang benar adalah: {word_to_guess}")
                    break
            else:
                attempts -= 1
                print(f"Huruf '{guess}' tidak ada dalam kata. Anda memiliki {attempts} kesempatan lagi.")

    if attempts == 0:
        print(f"\nGame over! Kata yang benar adalah: {word_to_guess}")

if __name__ == "__main__":
    main()