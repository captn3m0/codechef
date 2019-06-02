---
category_name: school
problem_code: RECIPE
problem_name: 'Cutting Recipes'
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
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: friggstad
date_added: 12-11-2010
tags:
    - cook04
    - easy
    - pieguy
editorial_url: 'http://discuss.codechef.com/problems/RECIPE'
time:
    view_start_date: 1290883955
    submit_start_date: 1290883955
    visible_start_date: 1290884136
    end_date: 1735669800
    current: 1492507628
layout: problem
---
All submissions for this problem are available.The chef has a recipe he wishes to use for his guests, but the recipe will make far more food than he can serve to the guests. The chef therefore would like to make a reduced version of the recipe which has the same ratios of ingredients, but makes less food. The chef, however, does not like fractions. The original recipe contains only whole numbers of ingredients, and the chef wants the reduced recipe to only contain whole numbers of ingredients as well. Help the chef determine how much of each ingredient to use in order to make as little food as possible.

### Input

Input will begin with an integer T, the number of test cases. Each test case consists of a single line. The line begins with a positive integer N, the number of ingredients. N integers follow, each indicating the quantity of a particular ingredient that is used.

### Output

For each test case, output exactly N space-separated integers on a line, giving the quantity of each ingredient that the chef should use in order to make as little food as possible.

### Sample Input

<pre>3
2 4 4
3 2 3 4
4 3 15 9 6
</pre>
### Sample Output

<pre>1 1
2 3 4
1 5 3 2
</pre>
### Constraints

T≤100
2≤N≤50
All ingredient quantities are between 1 and 1000, inclusive.
