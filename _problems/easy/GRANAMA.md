---
category_name: easy
problem_code: GRANAMA
problem_name: 'Granama Recipes'
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
problem_author: vamsi_kavala
problem_tester: laycurse
date_added: 28-08-2012
tags:
    - cakewalk
    - dec12
    - simple
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/GRANAMA'
time:
    view_start_date: 1355218909
    submit_start_date: 1355218909
    visible_start_date: 1355218200
    end_date: 1735669800
    current: 1493558150
layout: problem
---
All submissions for this problem are available.Chef has learned a new technique for comparing two recipes. A recipe contains a list of ingredients in increasing order of the times they will be processed. An ingredient is represented by a letter 'a'-'z'. The **i**-th letter in a recipe denotes the **i**-th ingredient. An ingredient can be used multiple times in a recipe.

The technique is as follows. Compare two recipes by comparing their respective lists. If the sets of ingredients used in both recipes are equal and each ingredient is used the same number of times in both of them (processing order does not matter), they are declared as **granama** recipes. ("granama" is the Chef-ian word for "similar".)

Chef took two recipes he invented yesterday. He wanted to compare them using the technique. Unfortunately, Chef forgot to keep track of the number of times each ingredient has been used in a recipe. He only compared the ingredients but NOT their frequencies. More precisely, Chef considers two recipes as granama if there are no ingredients which are used in one recipe and not used in the other recipe.

Your task is to report whether Chef has correctly classified the two recipes (as granama or not granama) although he forgot to keep track of the frequencies.

### Input

The first line of the input contains a single integer **T** denoting the number of test cases. The description for **T** test cases follows. Each test case consists of a single line containing two space-separated strings **R** and **S** denoting the two recipes.

### Output

For each test case, output a single line containing "YES" (quotes for clarity) if Chef correctly classified the two recipes as granama or not granama. Otherwise, output a single line containing "NO" (quotes for clarity) if Chef declared two recipes as granama when they actually are not.

### Constraints

1 ≤ **T** ≤ 100
1 ≤ |**R**|, |**S**| ≤ 1000

### Example

**Input:**
/>

<pre>
3
alex axle
paradise diapers
alice bob


</pre>**Output:**/>

<pre>
YES
NO
YES


</pre>**Explanation:**/>

Example case 1: Chef declared them as granama recipes. They are actually granama because the sets of ingredients and the number of times each ingredient has been used are equal. The Chef got it right!

Example case 2: Chef declared them as granama recipes because both sets of ingredients are equal. But they are NOT granama since ingredient 'a' has been used twice in the first recipe but only once in the second. The Chef was incorrect!

Example case 3: Chef declare them as not granama. They are not granama as the sets of ingredients are different. Hence, the Chef was right!
