---
category_name: medium
problem_code: GIVCANDY
problem_name: 'Sharing Candies'
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
problem_author: kevinsogo
problem_tester: 'xcwgf666,antoniuk1'
date_added: 31-05-2016
tags:
    - bezout
    - euclids
    - gcd
    - kevinsogo
    - linear
    - simple
    - snckpa16
editorial_url: 'http://discuss.codechef.com/problems/GIVCANDY'
time:
    view_start_date: 1465140600
    submit_start_date: 1465140600
    visible_start_date: 1465140600
    end_date: 1735669800
    current: 1493557679
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/SNCKPA16/mandarin/GIVCANDY.pdf), [Russian](/download/translated/SNCKPA16/russian/GIVCANDY.pdf) and [Vietnamese](/download/translated/SNCKPA16/vietnamese/GIVCANDY.pdf) as well.

Alvin and Berto have gotten tired of eating chocolates, so now they have decided to eat candies instead.

Alvin has **A** apple candies, and Berto has **B** banana candies. (I know, they have weird tastes.) Alvin and Berto always wants the split of candies to be as fair as possible. The problem is, Alvin only wants apple candies and Berto only wants banana candies!

Here comes Chef to the rescue! Chef bought an infinite number of candy packs. There are two types of packs:

- Packs containing exactly **C** apple candies.
- Packs containing exactly **D** banana candies.
 
Chef wants to give some (could be zero) apple candy packs to Alvin and some (could be zero) banana candy packs to Berto in such a way that _the absolute difference between the number of candies they have is minimized_. What is this minimum absolute difference?

Note that Chef doesn't want to open any pack; he gives each pack in full.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test case consists of a single line containing four integers **A**, **B**, **C**, and **D** separated by single spaces.

### Output

For each test case, output a single line containing a single integer, the minimum absolute difference between the number of candies they can have.

### Constraints

- **1** ≤ **T** ≤ **104**
- **1** ≤ **A**, **B**, **C**, **D** ≤ **1014**
 
### Example

 ```
<b>Input:</b>
<tt>2
1 5 10 3
1 2 2 2
</tt>
<b>Output:</b>
<tt>0
1
</tt>
<pre>### Explanation
**Example case 1.** In this test case, Alvin has 1 candy and Berto has 5. The apple candies come in packs of 10, and the banana ones come in packs of 3. In this situation, Chef can make them equal by giving 1 pack of 10 to Alvin and 2 packs of 3 to Berto, so they now have 1 + 10 = 5 + 3 + 3 = 11 candies each.

**Example case 2.** In this test case, Alvin has 1 candy and Berto has 2. The apple and banana candies come in packs of 2. In this situation, the number of candies of Alvin is always odd, and the number of candies of Berto is always even, so Chef cannot make them equal. The minimum difference is 1, which Chef can achieve by not giving any packs at all.
