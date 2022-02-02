---
category_name: easy
problem_code: CUBE
problem_name: 'Cube Cakes'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: viv001
problem_tester: gerald
date_added: 1-10-2013
tags:
    - dec13
    - easy
    - viv001
editorial_url: 'http://discuss.codechef.com/problems/CUBE'
time:
    view_start_date: 1387186200
    submit_start_date: 1387186200
    visible_start_date: 1387186200
    end_date: 1735669800
    current: 1493558134
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/DEC13/mandarin/CUBE.pdf) and [Russian](http://www.codechef.com/download/translated/DEC13/russian/CUBE.pdf).

This winter our chef plans to unveil his latest creation - Cube Cakes. As the name suggests, this new delicacy is a cake in the form of a perfect cube with secret ingredients from the chef's inventory. Since it is a relatively new creation of the chef, he wants to master the ability to make perfectly identical Cube Cakes. For this, he wants you to write a program that will calculate the similarity between two given Cube Cakes.

 Each Cube Cake can be represented as a cube of size **N** where each cell of the cube contains a lowercase alphabet ('a'-'z'). The similarity between two Cube Cakes ( of size  **N**  each ) is defined as the maximum sized *common* sub-cube that exists at exactly the same position in both the Cube Cakes. Two sub-cubes are said to be *common* if at-least **P%** of their corresponding characters are equal. You need to find the size **S** of the largest such sub-cube and also the number of *common* sub-cubes of size **S** in the Cube Cake.

### Input

 The first line contains an integer **T** denoting the number of test cases. Then the descriptions of testcases follows.

 The first line of each testcase contains integers **N** (the size of the Cube Cakes **A** and **B** that are to be compared) and  **P**.
The next line contains a string **SA** containing  **N3**  lowercase characters ('a'-'z'), where the  **A\[i\]\[j\]\[k\]th** element of the Cube Cake **A** is given by **SA\[ i\*N\*N + j\*N + k \]** where 0 ≤  **i, j, k**  ≤  **N-1** .
The next line contains a string **SB** containing  **N3**  lowercase characters ('a'-'z'), **SB** is the description of the Cube Cake **B** in the way analogical to **A**.

### Output

 For every test case, print in a single line the similarity between the two Cube Cakes  **S**  and the number of *common* sub-cubes of size **S**.
If there is no *common* sub cube present, just print **-1** in a single line.

### Constraints

- **1**  ≤ **T** ≤  **40**
- **1**  ≤ **N** ≤  **40**
- 0  ≤ **P** ≤  **100**
- **| SA |, |SB |**  =  **N3**

### Example

<pre><b>Input:</b>
3
2 40
abcdefgh
abcdefgh
2 100
abcdefgh
ccccccch
1 100
a
b

<b>Output:</b>
2 1
1 2
-1
</pre>
### Explanation

**Example case 1.**

Since both the Cube Cakes are identical, the whole cube matches and hence the similarity is **2**. Also, there is only one sub-cube of size **2**.

**Example case 2.**

Since **P** is **100**, all characters in the sub-cube must match. The sub cube **'c'** and **'h'** each of size **1** are the largest cube satisfying this criteria. Hence the similarity is  **1**  and corresponding count is **2** .

**Example case 3.**

Since no characters match in the cube, we cannot find a *common* subcube here.
