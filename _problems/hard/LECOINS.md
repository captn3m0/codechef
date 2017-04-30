---
category_name: hard
problem_code: LECOINS
problem_name: 'Little Elephant and Colored Coins'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: witua
problem_tester: anton_lunyov
date_added: 21-03-2012
tags:
    - dynamic
    - hard
    - march13
    - shortest
    - simple
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LECOINS'
time:
    view_start_date: 1363000587
    submit_start_date: 1363000587
    visible_start_date: 1363000281
    end_date: 1735669800
    current: 1493556752
layout: problem
---
All submissions for this problem are available.The Little Elephant from the Zoo of Lviv very likes coins. But most of all he likes colored coins.

He has **N** types of coins, numbered from **1** to **N**, inclusive. The coin of the **i**-th type has the value **Vi** dollars and the color **Ci**. Note that he has infinite supply of each type of coins.

The Little Elephant wants to make exactly **S** dollars using the coins. What is the maximal number of different colors he can use to make exactly **S** dollars using some of the coins he has? If it's impossible, output **-1**. Also note that the Little Elephant wants to know this for many values of **S**.

### Input

The first line of the input contains a single integer **N**, denoting the number of types of coins. Each of the following **N** lines contains two space-separated integers **Vi** and **Ci**, denoting the value and the color of the coin of the **i**-th type. The next line contains a single integer **Q**, denoting the number of values of **S** to process. Each of the following **Q** lines contains a single integer **S**, denoting the coinage you should represent via given coins using maximum number of colors.

### Output

For each value of **S** in the input, output the maximum number of different colors in the representation of **S** or **-1** if it is impossible to represent **S** via given coins.

### Constraints

- **1** ≤ **N** ≤ **30**
- **1** ≤ **Vi** ≤ **200000** (**2 \* 105**)
- **1** ≤ **Ci** ≤ **109**
- **1** ≤ **Q** ≤ **200000** (**2 \* 105**)
- **1** ≤ **S** ≤ **1018**

### Example

```

<b>Input:</b>
3
2 1
3 4
4 4
4
1
3
5
7

<b>Output:</b>
-1
1
2
2

```
### Explanation

- It is not possible to represent **S = 1** since every coin has value more than 1.
- **S = 3** can only be represented using one coin of the second type, hence only one color is used in the representation.
- **S = 5** can only be represented as **2 + 3**, which leads to two colors used.
- For **S = 7** we have two representations as **2 + 2 + 3** (with two colors used) and **3 + 4** (with one color used). Hence, the answer is 2.