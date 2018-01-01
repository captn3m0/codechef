---
category_name: easy
problem_code: SNACKUP
problem_name: SnackUp
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: alei
problem_tester: deadwing97
date_added: 30-05-2017
tags:
    - ad
    - alei
    - constructive
    - cook83
    - easy
editorial_url: 'https://discuss.codechef.com/problems/SNACKUP'
time:
    view_start_date: 1497812400
    submit_start_date: 1497812400
    visible_start_date: 1497812400
    end_date: 1735669800
    current: 1514816011
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK83/mandarin/SNACKUP.pdf), [russian](http://www.codechef.com/download/translated/COOK83/russian/SNACKUP.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK83/vietnamese/SNACKUP.pdf) as well.

This year CodeChef is organizing the SnackUp cooking contest. The favorite to win is of course our beautiful Chef Ada.

There are **n** judges in the contest, and for simplicity let's enumerate judges from 1 to **n**.

Ada has an uncountable repertoire of delicious recipes, but for the contest she choose only **n** of them. Let's also enumerate the recipes from 1 to **n**.

Ada is going to show off her cooking skills in many rounds, and we are going to help her organizing them! One round is structured as follows:

- We will choose **k** distinct recipes and Ada will prepare two identical dishes for each of them.
- We will choose **k** distinct judges for the round.
- We will send **k** invitation letters (one for each of the chosen judges). Each letter must contain the number of the judge, and two distinct integers denoting the ids of the recipes that he is going to taste.
- Two different judges can taste the same recipe, but it must be from different dishes.
- Ada does not like to waste food, so the letters must be designed in such a way that every prepared dish is tasted.

You can arbitrarily decide the number of rounds and the number of invited judges in each round, but as a rule of the contest at the end of all rounds each judge must have tasted every recipe exactly twice. ### Input

The first line of input contains one number **T**, the number of test cases. Each test case consist of one line containing an integer **n**, the number of judges.

### Output

For each testcase, in the first line, print **r** the number of rounds, then describe each round as follows.

In the first line of each round, print **k**, the number of invited judges.

In the next **k** lines, print the invitation letters as three space separated integers: **j**, **x**, **y** denoting the id of the judge, and the ids of the recipe that he is going to taste. Note that **x** should not be equal to **y**.

### Constraints

16. 1 ≤ **T** ≤ 100
17. 2 ≤ **n** ≤ 100
### Example

<pre>
<b>Input:</b>
1
2

<b>Output:</b>
2
2
1 1 2
2 1 2
2
1 1 2
2 1 2

</pre>