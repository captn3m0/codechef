---
category_name: easy
problem_code: SHOPTRIP
problem_name: 'Bear and Shop Trip'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: mnbvmar
date_added: 20-04-2017
tags:
    - cook81
    - dp
    - easy
    - errichto
editorial_url: 'https://discuss.codechef.com/problems/SHOPTRIP'
time:
    view_start_date: 1492972200
    submit_start_date: 1492972200
    visible_start_date: 1492972200
    end_date: 1735669800
    current: 1497284112
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK81/mandarin/SHOPTRIP.pdf), [Russian](http://www.codechef.com/download/translated/COOK81/russian/SHOPTRIP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK81/vietnamese/SHOPTRIP.pdf) as well.

Bear Limak is an assistant in the kitchen. While he doesn't really know how to cook, he can run very fast and thus Chef often sends him to buy new ingredients from shops.

Chef needs **K** different ingredients, numbered 1 through **K**.

The kitchen is located at the point (0, 0). There are **N** shops. The i-th shop is located at the point (**X**i, **Y**i) and its inventory is described by the string **s**i of length **K**. The i-th character of **s**i is '1' if the i-th ingredient is available in this shop, and '0' otherwise.

All **N**+1 points are distinct (the kitchen and the **N** shops).

Limak must start from the kitchen, visit some shops and buy all necessary ingredients (each of **K** ingredients should be available in at least one visited shop), and go back to the kitchen. What is the minimum total distance Limak will cover? Print -1 if it's impossible to get all the ingredients.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **N** and **K** denoting the number of shops and the number of ingredients.

The i-th of the next **N** lines contains two integers **x**i and **y**i denoting coordinates of the i-th shop. No two shops are at the same point, and no shop is at the point (0, 0).

The i-th of the next **N** lines contains a string **s**i of length **K**, consisting of characters '1' and '0'. The j-th character is '1' if and only if the j-th ingredient is available in this shop.

### Output

For each test case, output a single line containing the answer: a number -1 if Limak can't get all **K** ingredients, or one real value otherwise — the minimum total distance. The relative or absolute error shouldn't exceed 10-6.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 36
- 1 ≤ **K** ≤ 12
- -1000 ≤ **x**i, **y**i ≤ 1000

### Example

<pre><b>Input:</b>
5
3 6
100 100
-50 100
0 -100
111110
110011
001111
3 6
100 100
-50 100
0 -100
111110
110011
111111
3 6
100 100
-50 100
0 -210
111110
110011
111111
3 6
100 100
-50 100
0 -210
111010
110011
111011
10 10
763 77
512 859
494 362
-986 -885
-866 890
128 553
-879 981
449 310
-406 10
-955 -475
0000001000
1000000000
0000000100
0001000000
0000100000
0010000000
0000010000
0000000001
0100000000
0000000010

<b>Output:</b>
403.2247551123
200.0000000000
403.2247551123
-1
6652.7837723893
</pre>
### Explanation

**Test case 1.** There are 3 shops, located at points (100, 100), (-50, 100) and (0, -100). The first shop is described by a string "111110", which means that ingredients 1 through 5 are available in this shop, but ingredient 6 isn't. The other two shops are described by strings "110011" and "001111" respectively. Any two shops are enough to get all 6 ingredients (because, for every two shops it's true that each of 6 ingredients is available in at least one of those two shops).

To minimize the total distance, Limak should visit the first and the second shop (in any order). For example, his journey can look as follows:

- Go from the starting point (0, 0) to the first shop (100, 100). The distance is sqrt(1002 + 1002) = 141.4213562373095.
- Go from (100, 100) to (-50, 100). The distance is 150.
- Go from (-50, 100) back to the kitchen at (0, 0). The distance is sqrt(502 + 1002) = 111.80339887498948

The total distance is 141.4213562373095 + 150 + 111.80339887498948 = 403.224755112299.

**Test case 2.** This time the third shop has all the ingredients. It's optimal to visit only this shop and go back to the kitchen.

**Test case 4.** Limak can't get all ingredients, even if he visits all the shops. The answer is -1.
