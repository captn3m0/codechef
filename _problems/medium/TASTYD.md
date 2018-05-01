---
category_name: medium
problem_code: TASTYD
problem_name: 'Tasty Dishes'
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
problem_author: Rubanenko
problem_tester: vamsi_kavala
date_added: 28-06-2013
tags:
    - Rubanenko
    - divide
    - ltime01
    - medium
editorial_url: 'http://discuss.codechef.com/problems/TASTYD'
time:
    view_start_date: 1372581626
    submit_start_date: 1372581626
    visible_start_date: 1372581299
    end_date: 1735669800
    current: 1493557944
layout: problem
---
All submissions for this problem are available.Chef's restaurant is the most attractive place to have dinner at. To understand why, let's have a look at a way customers do their orders:

There is only one list of **N** ingredients in the menu. Every ingredient has its beauty value that does not depend on its taste, but on the way it looks, which is expressed as a positive integer. To order a dish, the customer asks Chef to use all the ingredients from **L** to **R** (**L** is strictly less than **R**). Chef knows that the dish will be tasty and not only beautiful if the sum of its ingredients' beauty values is divisible by **K**. Chef does not want to use all the ingredients, so he always excludes one of them. Which one? - The least beautiful one! (in other words - which has the minimal beauty value). Now he wonders - how many segments (**L,R**) are there such that the sum of their beauty values will be divisible by **K** after excluding the least beautiful ingredient.

### Input:

First line of the input consists of two positive integers - **N** and **K**. There are **N** space separated positive integers - beauty values of the ingredients.

/>/>

### Output:

Output should consist of a single integer - the answer for the problem. 

/>/>

### Constraints:

<pre>
1 ≤ <b>N</b> ≤ 2*10<sup>5</sup>
1 ≤ <b>K</b> ≤ 10<sup>9</sup>
1 ≤ <b>beauty value</b> ≤ 10<sup>9</sup>

</pre>### Example:

**Input:**

<pre>
4 2
1 2 3 4

</pre>**Output:**

<pre>
2

</pre>### Scoring:

1 ≤ **N** ≤ 1000, this subtask is worth **21** point.

1 ≤ **K** ≤ 100, this subtask is worth **39** points.

There are no special constrains for the remaining **40** points.

/>/>/>/>

### Test generation details: 

Delivery and sorting of ingredients is quite random thing, so all the test cases will look as follows:

**N** and **K** are chosen by setter. An integer **M** is chosen by setter from interval **\[100..10^9\]**. Let **B\[\]** be the array of beauty values of ingredients. **B\[i\]** is chosen uniformly at random from an interval **\[1..M\]** for every **1** ≤ **i** ≤ **N**. After **B\[\]** is generated setter can choose a positive integer **R** and do **B\[i\]** = **B\[i\]**\***R** for every **1** ≤ **i** ≤ **N**. It's guaranteed that even after multiplying every **B\[i\]** won't exceed **10^9**. />
