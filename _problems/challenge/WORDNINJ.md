---
category_name: challenge
problem_code: WORDNINJ
problem_name: WordNinjas
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: anton_lunyov
problem_tester: laycurse
date_added: 7-11-2012
tags:
    - anton_lunyov
    - challenge
    - dec12
editorial_url: 'http://discuss.codechef.com/problems/WORDNINJ'
time:
    view_start_date: 1355220969
    submit_start_date: 1355220969
    visible_start_date: 1355218200
    end_date: 1735669800
    current: 1525454428
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.**Attention!** _This is challenge problem with the longest problem statement ever (it is even longer than for the legendary problem [CIELHACK](http://www.codechef.com/OCT12/problems/CIELHACK)). You should invest some time in order to get all necessary points. But in the end there is a hint on how to get **Accepted**. So you will be awarded for your patience :)_

Let's play [WordNinjas](https://itunes.apple.com/us/app/wordninjas/id472994571?mt=8)! (_**Note!** CodeChef is not affiliated with iTunes/Apple in any ways :)_)

In short, you should create words from letters that your ninja will get by attacking tiles. Some special tiles contain bonuses.

Here we consider some simplified version of the game where all the tiles are arranged in a line and we know their values in advance. Tiles are divided into blocks. At each move you can either skip the current block or take exactly one tile from it. Thus, you have a sequence of tile blocks as an input. Each block will be a string of characters where each character represents one tile. Each tile can be either a letter tile or some bonus tile. On each letter tile there will be written some letter of English alphabet and such tiles will be represented by the corresponding uppercase letters of English alphabet in the input. There exist 5 types of bonus tiles. The first one is a blank tile that behaves like an ordinary letter tile but you can write any letter on this tile when you create words (see below). The detailed description of all types of bonus tiles will be provided later.

The main aim of the game is to score as many points as possible. Most of the points can be gained by creating words. For this you have an array of length 7 that can be filled by letter or blank tiles that you get from the tile blocks. Each cell of the array can be occupied by at most one tile. **If at some move you take some letter or blank tile but all 7 cells in the array are occupied, this tile will be thrown away, otherwise this tile will occupy the first unoccupied cell of the array.** Thus, tiles in array always occupy several first cells. We number the cells in the array by numbers from 1 to 7. So if you have 5 tiles in the array they will occupy cells 1, 2, 3, 4, 5. You can also throw away tiles from the array at any time if you need this. Remaining tiles will be moved preserving their relative order and still will occupy several first positions. For example, if you have 5 tiles in the array and you throw away tiles from the 2nd and the 4th cells then the tile from the 3rd cell will occupy the 2nd cell and the tile from the 5th cell will occupy the 3rd cell after this operation.

Finally, you can arbitrarily rearrange tiles in the array. Once you write some letters on all your blank tiles and get the rearrangement of tiles such that the corresponding sequence of letters forms a correct word you can play this word to get some points that depends on letters you have in this word and some other factors (see below). After this all the tiles except the last one will be thrown away from the array and the last tile will occupy the first position of the array. If it was the blank tile you can erase the letter you have written on it before and write another letter. Of course, you will be given a dictionary of all correct words that you can play. Note, that in all official input files this dictionary will be the same (see **Test Case Generation** section for details). But in the example we will use some dummy dictionary that consists of only two words :)

**Types of bonus tiles:**

- **Blank tile.** As mentioned before, it occupies one cell in the array and any letter can be written on it. You will get 5 points by taking a blank tile since the magic panda keeps this tile. It will be denoted by the character **?** (question mark) in the input. You can carry several blank tiles in the array at the same time. **When points for the played word are calculated it scores 0 points regardless of the letter that was written on it.**
- **Double letter tile.** It doubles points scored by the letter in the particular cell of the array. The tile that corresponds to the **i**-th cell will be represented by the digit **i** in the input.
- **Triple letter tile.** It triples points scored by the letter in the particular cell of the array. Since there are no uppercase digits in the English alphabet we will represent the triple letter tiles by lowercase English letters. That is, the character **a** in the input means the tile that triples score of the letter written on the tile that occupies the first cell of the array, character **b** do the same for the second cell and so on. Note that the letter tiles are represented by uppercase letters so there will be no ambiguities.
- **Double word tile.** It doubles points scored by all letters in the array. This tile will be represented by **+** character.
- **Triple word tile.** It triples points scored by all letters in the array. This tile will be represented by **\*** character.

You will get 2 points by taking tiles of the last four types since each such tile is kept by baby dragon. To describe in detail how these tiles behave let us introduce a concept of multipliers. Namely, each array cell (there are 7 of them) has its multiplier. Initially all these multipliers are equal to 1. A double letter tile assigns the multiplier for the corresponding cell to 2 and a triple letter tile assigns this multiplier to 3. So if multiplier for some position was 3 and you take the double letter tile for this cell it will be assigned to 2 and you will possibly get lower score for the word. The whole array also has a multiplier that initially equals to 1 and changes by double and triple word tiles in the same way as multipliers for particular cells. **After you play a word all multipliers are reset to 1.**

**How many points will you get for a particular word?** Each letter has some point value which is based on the letter's frequency in standard English writing: commonly used letters such as **A** or **S** are worth one point, while less common letters score higher, with **Q** and **Z** each worth 10 points. The full distribution of points by letters coincides with the standard Scrabble's one and can be found [here](http://en.wikipedia.org/wiki/Scrabble_letter_distributions#English). For the sake of completeness we provide it here:

- _1 point_: **A**, **E**, **I**, **L**, **N**, **O**, **R**, **S**, **T**, **U**
- _2 points_: **D**, **G**
- _3 points_: **B**, **C**, **M**, **P**
- _4 points_: **F**, **H**, **V**, **W**, **Y**
- _5 points_: **K**
- _8 points_: **J**, **X**
- _10 points_: **Q**, **Z**

Now assume that you play a word of length **L**, where **2 ≤ L ≤ 7** (there are no words of length 1 in SOWPODS). Denote by **C\[i\]** the score of the **i**-th letter in this word according to the distribution above. As mentioned above, if some letter is created from the blank tile then the corresponding score is 0. Further denote by **M\[i\]** the multiplier of the **i**-th cell of the array and by **M** the multiplier of the whole array. Then the number of points you will get for this word equals to

**M \* (M\[1\] \* C\[1\] + ... + M\[L\] \* C\[L\]) + 3 \* max(L − 3, 0) + 30 \* max(L − 6, 0).**

The second summand means bonus points for long words and equals to 3 for 4-letter words, 6 for 5-letter words, 9 for 6-letter words and 12 for 7 letter-words. The last summand is additional large bonus of 30 points for 7-letter words. (In the actual WordNinjas game the whole score of the word is 10 times higher as well as the points for taking bonus tiles, but we get rid of this 10 in this problem.)

Thus, the total score you will get during the game is the sum of two sums, the first one is the sum of scores of all the played words during the game and the second one is the sum of points you got by taking bonus tiles.

Your goal is to maximize your score. But this is a challenge problem and you don't need to find the optimal solution.

### Input

The first line of the input contains an integer **N**, the number of words in the dictionary. Each of the following **N** lines contains one word composed of uppercase letters of English alphabet.

The next line contains a positive integer **M**, the number of tile blocks. Each of the following **M** lines contains one non-empty string of at most 10 characters that represents the set of tiles in the current block. Each character in this string can be one of the following:

- The uppercase letter of English alphabet, which represents the usual letter tile.
- The **?** character, which represents the blank tile.
- The **+** character, which represents the double word tile.
- The **\*** character, which represents the triple word tile.
- The digit from 1 to 7, which represents the double letter tile for the corresponding cell of the array.
- The lowercase letter from the set **{a, b, c, d, e, f, g}**, which represents the triple letter tile for the corresponding cell of the array.

There will be no white space characters in the input other than new lines (ASCII code 10).

### Output

For each tile block in the input, your output may consist of one, two or three lines. The first line should always contain one of the strings **"Take C"** or **"Skip"** depending on whether you take some tile from this block or skip it. Here **C** denotes the character from the block that you want to take. As was mentioned before if you take the letter or blank tile but all 7 cells in the array are occupied this tile will be thrown away. However you will get 5 points if you take a blank tile in any case. If you try to take the tile that is not present in this block your move will be ignored. But in any case **C** should be a character that represents some tile. Otherwise you will get **Wrong Answer**.

If you want to throw away some tiles, then start the next line with the string **"Throw "** (the last character is a space) followed by the non-empty list of tiles you want to throw. You should denote them as they were denoted in the input: letter tiles by uppercase letters of English alphabet, blank tiles by question marks. You can list them in any order. If some of the tiles you want to throw are not present in your array they will be ignored. But this list should contain no more than 7 characters in any case (we don't want to analyze millions of characters if you decide to output some enormous list). Also each character in this list should be either an uppercase English letter or a question mark and you should not separate characters in this list by white spaces. Otherwise you will get **Wrong Answer**.

If you want to play a word at this move, then start the next line with the string **"Play "** (the last character is a space) followed by a string composed of uppercase and lowercase letters of the English alphabet. The length of this word should be at least 2 and no more than 7. Here uppercase letters mean letters written on usual letter tiles and lowercase letters mean letters written on blank tiles. If you try to play incorrect word or the word that can not be created from available letter and blank tiles in your array your move will be ignored. If the word is correct and can be created from you tiles you will get the corresponding score for it. The word does not have to use all the tiles in the array. In this case the special judge will throw away all unnecessary tiles instead of you and then the word will be played. After you played the correct word only one tile remains in the array - the last tile of your word.

Any additional white spaces in your output will be ignored.

**Your output will be considered as correct if and only if it corresponds to the described format and you play at least one correct word during the game.** It is guaranteed that such output exists (see **Test Case Generation** section for details).

### Scoring

Your score for a particular test file is the score that your output will get for the whole game. The total score for a submission is the average score across all the test files. Your goal is to maximize the total score.

### Example

<pre>
<b>Input:</b>
2
CODE
CHEF
13
*+
CC
OA
D?
E
+
F
abcdefg
H
E
???
E
QZ321??

<b>Output 1:</b>
Take *
Take C
Take O
Take D
Take E
Take +
Play CODE
Take F
Take a
Take H
Skip
Play CHEF
Take ?
Play sIstEr
Take E
Play cHEF
Take ?

<b>Output 2:</b>
Take *
Take C
Take O
Take D
Take E
Skip
Take F
Take d
Take H
Take E
Take ?
Take E
Take 2
Throw ED
Play CHEF
</pre>### Explanation

**Output 1:**

Here we have two correct words **CODE** and **CHEF**. At first we take triple word tile, which bring us 2 points, then 4 letters **C**, **O**, **D**, **E** and double word tile which bring us 2 points. Then we play the word **CODE**, which bring us **2 \* (3 + 1 + 2 + 1) + 3 = 17** points. After this we have letter **E** in the array. Note that if we would skip double word tile then the multiplier for the array would be 3 and we get **24** points for the word.

Next we want to play the word **CHEF**. At the next moves we take the letter **F**, then the triple letter tile **a** that corresponds to the first cell of the array and brings us 2 points, and the letter **H**, but skip **E** since we already have it. Then our little sister accidentally tries to play the word **CHEF**. Though this is a correct word we have only letters **E**, **F** and **H** in our possession and can't play this word. Luckily the special judge is kind and simply ignores this move.

At the next move we kick the magic panda and take the blank tile, which brings us 5 additional points. Now we can play the word **cHEF** by writing letter **C** on the blank tile but just before playing the word little sister again plays tricks on us and at first try to play word **sIstEr** (having 4 blank tiles!) which is incorrect according to our dictionary and then take the next letter **E**. So we try to play the word **cHEF** having letters **E, E, F, H** and one blank tile in our possession. Luckily special judge is kind and forgive us this mistake. It threw away unnecessary letter **E** and only then played the word which bring us **(3 \* 0 + 4 + 1 + 4) + 3 = 12** points. Note that the blank tile gives 0 points with any letter written on it. So we waste triple letter tile by playing this word.

At the last move we take the blank tile from the last block and receive additional 5 points. Game over. The total score for the game is **2 + 2 + 17 + 2 + 5 + 12 + 5 = 45**.

**Output 2:**

Here we take some tile from each block except the double word tile from the 6th block. In particular, we take the triple word tile from the first block, the triple letter tile corresponding to the 4th cell from the 8th block and the double letter tile corresponding to the second cell from the last block. Note that taking blank tile brings us 5 points but since we already have 7 tiles in the array we did not get this tile in our possession, the same is true for last letter **E** - taking this letter is simply ignored. After that we throw away letters **D** and **E** and are left with letters **C**, **E**, **F**, **H** and **O**. Finally we play the word **CHEF** which bring us **3 \* (3 + 2 \* 4 + 1 + 3 \* 4) + 3 = 75** points since we have multiplier 3 for the whole array, multiplier 2 for the second cell and multiplier 3 for the 4th cell. As in the previous example unnecessary letter **O** was automatically thrown away before playing the word. Thus the total score for the game is **2 + 2 + 5 + 2 + 75 = 86**. As you can see playing just one word during the game can be better than playing two words even if one of them coincide with that only word :)

### Test Case Generation

The dictionary will be the same in all official test files and can be found [here](http://www.codechef.com/download/WORDNINJ_dict.txt). It consists of all **74414** words in [SOWPODS](http://en.wikipedia.org/wiki/SOWPODS) list that have length from 2 to 7. Also, note that in each official input file words are sorted by their length and words of the same length are sorted in the alphabetical order. In generating tiles we have followed Scrabble standards. The total number of tiles in blocks of each official test file will be exactly 10000. There will be exactly 9000 letter and blank tiles. They together form 90 full English-language sets for Scrabble. Each such set consists of 98 letter tiles and 2 blank tiles. The distribution of letters in this set can be found [here](http://en.wikipedia.org/wiki/Scrabble_letter_distributions#English). In particular, each input file will have exactly 180 blank tiles, exactly 90 letters **Z**, exactly 810 letters **A** and so on. The remaining tiles are bonus tiles that affect multipliers. There will be exactly 30 triple word tiles, 70 double word tiles, 300 triple letter tiles and 600 double letter tiles. Each double or triple letter tile will correspond to each cell of the array uniformly at random. To get the input sequence of block tiles some random permutation of mentioned 10000 tiles are taken and then it is divided by blocks, where each block has size from 1 to 10 uniformly at random.

### Hint

_In order to get **Accepted** you can simply output **M** times string **Take A** and then output **Play AA**_.

Why is this correct? Since special judge ignores tries to take incorrect tiles, all your moves for blocks that do not contain tile with letter **A** will be considered as skip moves. In the end you will definitely have all 7 positions in the array filled by letters **A** since there are **810** tiles with letter **A** in the input. Since **AA** is a correct word and the special judge will throw away unnecessary tiles before playing the word, you will successfully play the word **AA** in the end.
