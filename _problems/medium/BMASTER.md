---
category_name: medium
problem_code: BMASTER
problem_name: 'Blade Master'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3.5'
source_sizelimit: '50000'
problem_author: Rubanenko
problem_tester: anton_lunyov
date_added: 5-08-2012
tags:
    - Rubanenko
    - medium
    - oct12
editorial_url: 'http://discuss.codechef.com/problems/BMASTER'
time:
    view_start_date: 1350293400
    submit_start_date: 1350293400
    visible_start_date: 1350293400
    end_date: 1735669800
    current: 1493557491
layout: problem
---
All submissions for this problem are available.Loda and Maelk are legendary ChefCraft players. They have played so many games that this number doesn't fit in a standard 32-bit integer type. Today Loda and Maelk are going to sort the things out and find out who is the greatest ChefCraft player ever. So the great fight is coming. There are a lot of different heroes you may choose to play ChefCraft. Obviously every hero has his pros and cons. Loda perfectly plays Blade Master. His main skill is to make mirror images of himself to spoof the enemy.


As every other popular game ChefCraft is played on a rectangular grid which consists of **N** rows and **M** columns. Rows of the grid are numbered by integers from **1** to **N**. So the upper row of the grid has number **1** and the lower row has number **N**. The same holds for columns. They are numbered by integers from **1** to **M** such that the most left column has number **1** while the most right column has number **M**.


At the beginning of the game the only Blade Master's image stands on some starting cell **(Sx, Sy)** where **1 ≤ Sx ≤ N** and **1 ≤ Sy ≤ M**. Then Loda makes **T** moves. Maelk knows how the distribution of images on the grid changes after each Loda's move. This happens according to the following rules.


**1.** If there is an image standing on the cell **(i, j)** then the new images appear by the next rules:


- Let **F(i, j)** be the total number of images in the "cross" of the cell **(i, j)**. The "cross" of the cell **(i, j)** is union of all cells in the **i**-th row of the grid and in the **j**-th column of the grid. So **N + M − 1** cells belongs to the "cross".
- Let **X = F(i, j) mod 6**, that is **X** is the remainder of the division of **F(i, j)** by **6**.
- For every possible value of **X** we have following values: **D1**, **D2**, **P1**  and **P2**.
- **D1** and **D2** may be equal to one of the **4** values **\['U', 'R', 'D', 'L'\]** and mean some two directions. Here **'U'** means **up**, **'R'** means **right**, **'D'** means **down** and **'L'** means **left**.
- **P1** and **P2** are integer numbers.
- New mirror images will appear at every cell in the direction **D1** with the period **P1** starting from cell **(i, j)** and in the direction **D2** with the period **P2** also starting from the cell **(i, j)**. Of course, no images will appear out of the grid. For example, if **D1 = 'U'** and **P1 = 2** then images appear at the cells **(i − 2, j), (i − 4, j), (i − 6, j)**, and so on.
- Loda always use the same values for **D1** and **D2**. Namely,
  **D1 = 'U', D2 = 'D'** for **X = 0,**
  **D1 = 'L', D2 = 'R'** for **X = 1,**
  **D1 = 'U', D2 = 'R'** for **X = 2,**
  **D1 = 'R', D2 = 'D'** for **X = 3,**
  **D1 = 'D', D2 = 'L'** for **X = 4,**
  **D1 = 'L', D2 = 'U'** for **X = 5.**
- But values **P1** and **P2** may vary for different games. But once chosen they will be the same for all moves.


**2.** Appearing of new mirror images happens immediately.


**3.** Whenever there is more than one image at the cell they start one on one fights. In each fight two images participate and both die. So if the number of images in the cell was even than all images will disappear in the end, otherwise exactly one image will remain at this cell.


Now Maelk wants to choose his hero in order to win the fight. The most important thing he needs to know for this is how the number of images changes during Loda's moves. So he asks you for help. Denote by **C(t)** the number of images on the grid after the **t**-th Loda's move for **t** from **1** to **T**. For convenience we denote **C(0) = 1** with meaning that -th move is the putting of the only Blade Master's image at the starting cell. Maelk wants you to calculate the sum **C(0) + C(1) + ... + C(T)**. Since Maelk doesn't know what to expect from Loda he would like to know the answer for several values of **T**. As you remember the total number of games played by Maelk and Loda at ChefCraft doesn't fit in a standard 32-bit integer type. Of course, the same can hold for the number of moves in their final fight. Since Maelk plays ChefCraft the whole life he is not strong in math and can't calculate such large sums. So let's help him to win the final fight and become the only ChefCraft master ever.

### Input

The first line of the input contains three space separated integers **N**, **M**  and **Q**. Here **N** and **M** are sizes of the grid described above and **Q** is the number of Maelk's queries. The second line contains two space separated integers **Sx** and **Sy**, row index and column index of the starting position of the first image. Each of the following six lines contains two space separated integers, the values **P1** and **P2**  for the corresponding **X**, that is, **i**-th line among these six lines contains values **P1** and **P2**  for **X = i − 1**. Each of the following **Q** lines contains a single integer **T**, the number of Loda's moves for the corresponding Maelk's query.

### Output

For every Maelk's query output on a separate line the numbers of images Maelk will see during Loda's move.

### Constrains

**N** and **M** are positive
**N** • **M** ≤ **34**
**1** ≤ **Sx** ≤ **N**
**1** ≤ **Sy** ≤ **M**
**1** ≤ **P1**, **P2** ≤ **max{N, M}**
**1** ≤ **Q** ≤ **100**
**1** ≤ **T** ≤ **1016**

### Example

<pre>
<b>Input:</b>
3 3 3
1 1
1 1
1 1
1 1
1 1
1 1
1 1
1
2
3

<b>Output:</b>
4
12
17

</pre>### Explanation
The initial grid looks as follows:
100
000
000
Here '1' represents a cell with an image and '0' represents a free cell.

After the first move grid is
111
000
000

After the second move grid is
101
111
111

Finally, after the third move we have
011
101
010

So after the first move Maelk will see **3** images, after the second move – **8** images and after the third move – **5** images. Hence the answers for **T = 1, 2, 3** are **1 + 3 = 4**, **1 + 3 + 8 = 12** and **1 + 3 + 8 + 5 = 17** respectively.
