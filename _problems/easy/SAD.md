---
category_name: easy
problem_code: SAD
problem_name: 'Gift Rift'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: shettynamit
problem_tester: laycurse
date_added: 15-05-2012
tags:
    - cakewalk
    - july12
    - search
    - shettynamit
editorial_url: 'http://discuss.codechef.com/problems/SAD'
time:
    view_start_date: 1341999849
    submit_start_date: 1341999849
    visible_start_date: 1341999849
    end_date: 1735669800
    current: 1493558185
layout: problem
---
All submissions for this problem are available.Our Chef is very happy that his son was selected for training in one of the finest culinary schools of the world. So he and his wife decide to buy a gift for the kid as a token of appreciation. Unfortunately, the Chef hasn't been doing good business lately, and is in no mood on splurging money. On the other hand, the boy's mother wants to buy something big and expensive. To settle the matter like reasonable parents, they play a game.

They spend the whole day thinking of various gifts and write them down in a huge matrix. Each cell of the matrix contains the gift's cost. Then they decide that the mother will choose a row number **r** while the father will choose a column number **c**, the item from the corresponding cell will be gifted to the kid in a couple of days.

The boy observes all of this secretly. He is smart enough to understand that his parents will ultimately choose a gift whose cost is **smallest** in its **row**, but **largest** in its **column**. If no such gift exists, then our little chef has no option but to keep guessing. As the matrix is huge, he turns to you for help.

He knows that sometimes the gift is not determined uniquely even if a gift exists whose cost is smallest in its row, but largest in its column. However, since the boy is so smart, he realizes that the gift's **cost** is determined **uniquely**. Your task is to tell him the gift's **cost** which is smallest in its row, but largest in its column, or to tell him no such gift exists.

### Input

First line contains two integers **R** and **C**, the number of rows and columns in the matrix respectively. Then follow **R** lines, each containing **C** space separated integers - the costs of different gifts.

### Output

 Print a single integer - a value in the matrix that is smallest in its row but highest in its column. If no such value exists, then print "GUESS" (without quotes of course)

### Constraints

 1 <= **R**, **C** <= 100

 All gift costs are positive and less than 100000000 (10^8)

### Example 1

<pre>
<b>Input:</b>
2 3
9 8 8
2 6 11

<b>Output:</b>
8
</pre>### Example 2

<pre>
<b>Input:</b>
3 3
9 8 11
2 6 34
5 9 11

<b>Output:</b>
GUESS
</pre>### Example 3

<pre>
<b>Input:</b>
2 2
10 10
10 10

<b>Output:</b>
10
</pre>### Explanation of Sample Cases

**Example 1**: The first row contains 9, 8, 8. Observe that both 8 are the minimum. Considering the first 8, look at the corresponding column (containing 8 and 6). Here, 8 is the largest element in that column. So it will be chosen.

**Example 2**: There is no value in the matrix that is smallest in its row but largest in its column.

**Example 3**: The required gift in matrix is not determined uniquely, but the required cost is determined uniquely.
