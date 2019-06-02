---
category_name: medium
problem_code: BEAUTY
problem_name: 'Beautiful Sandwich'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 7-06-2016
tags:
    - kingofnumbers
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493557912
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/BEAUTY.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/BEAUTY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/BEAUTY.pdf) as well.

Chef is going to participate in 'Who will prepare the most beautiful sandwich?' reality show. The show requires participants to prepare sandwiches that not only look beautiful, but taste delicious too. The show also releases a list of ingredients that you are allowed to use in the sandwich. This time, the list consists of **K** ingredients. For the purpose of our problem, you can assume that each ingredient is denoted by a lower case Latin character. So the first **K** lower case Latin letters will describe all the ingredients.

Chef's sandwich consists of **N** parts of ingredients packed in a row. You can think of it as a string of length **N** containing the first **K** English letters only.

Chef thinks the beauty of the sandwich is an integer that can be computed in the following way:

- First partition the sandwich into consecutive blocks of maximal length such that all the parts in the same block are of same ingredient.
- Beauty of this sandwich is the sum of squared lengths of the blocks.

For example, let the sandwich be denoted by "aadddbabb".

- Chef partitions it in this way - aa, ddd, b, a, bb
- Beauty of this sandwich is equal to 2\*2 + 3\*3 + 1\*1 + 1\*1 + 2\*2 = 19

There will be **Q** judges in the show. Chef diligently worked for days in preparing **Q** such sandwiches before the show. Now, it is the show time. He just got an information from the back stage anchor that some of the judges are allergic to some ingredients. Now, Chef has to sit down and take out each sandwich and remove all the ingredients that the judge (the one who is supposed to taste it) is allergic to. After doing that, he will rearrange the parts of the sandwich continuously without leaving any ugly looking gap.

Now, Chef is worrying about the beauty of the sandwiches presented to various judges. He asks you to help in this.

### Input

The first line of the input contains two space separated integers **N** and **K**, denoting the number of parts in the sandwich and the number of available ingredients, respectively.

The second line contains a string of length **N** having only the first **K** Latin lower case letters, denoting the sandwich.

The third line contains a single integer **Q**, denoting the number of judges.

Each of the following **Q** lines contains a string denoting the ingredients to which the corresponding judge is allergic. The string will be sorted in ascending order of their characters. No character will appear more than once in it.

### Output

For each query, output a single integer in a separate line denoting the beauty of the sandwich that the corresponding judge will be tasting.

### Constraints

19. **1** ≤ **N** ≤ **200,000**
20. **1** ≤ **K** ≤ **18**
21. **1** ≤ **Q** ≤ **262,143**
### Example

<pre><b>Input:</b>
<tt>7 4
acabada
2
b
ac
</tt>
<b>Output:</b>
<tt>8
2</tt>
</pre>
### Explanation

**First** judge is allergic to ingredient denoted by 'b'. So Chef has to remove this ingredient from the judge's sandwich. After that, the sandwich will be "acaada". Its beauty will be 1\*1 + 1\*1 + 2\*2 + 1\*1 + 1\*1 = 8

**Second** judge is allergic to ingredients denoted by characters 'a' and 'c'. After removing these ingredients, the sandwich will become "bd" and its beauty will be 2.
