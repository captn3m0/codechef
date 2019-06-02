---
category_name: easy
problem_code: MAGICJAR
problem_name: 'Chef and Magical Jars'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - PYP3
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: akil_av17
problem_tester: null
date_added: 24-01-2019
tags:
    - akil_av17
    - easy
    - feb19
    - observations
editorial_url: 'https://discuss.codechef.com/problems/MAGICJAR'
time:
    view_start_date: 1550050202
    submit_start_date: 1550050202
    visible_start_date: 1550050202
    end_date: 1735669800
    current: 1559472949
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/FEB19TST/hindi/MAGICJAR.pdf), \[Bengali\](http://www.codechef.com/download/translated/FEB19TST/bengali/MAGICJAR.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/FEB19TST/mandarin/MAGICJAR.pdf), \[Russian\](http://www.codechef.com/download/translated/FEB19TST/russian/MAGICJAR.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/FEB19TST/vietnamese/MAGICJAR.pdf) as well. Chef decided to teach some advanced recipes to junior chefs. On the very first day of their cooking sessions, to identify the cooking abilities of each junior chef, Chef instructed them to make their premier dishes. The junior chefs were very excited and they all went into the kitchen to cook their dishes. Chef has a limited number of jars in the kitchen. The jars are magical ― if a chef that is cooking a dish requiring $x$ ingredients takes $x$ jars, each of these jars fills itself with one of the required ingredients, and after this chef finishes cooking and returns the jars to the kitchen, they empty themselves (and are ready for other chefs to take some or all of them). Of course, this means it is impossible to cook a dish requiring $x$ ingredients with less than $x$ jars. Since Chef did not tell the junior chefs in which order they should prepare their dishes, they started picking up jars simultaneously and in the end, no junior chef was able to acquire enough jars to prepare their premier dish. Also, none of the junior chefs are willing to lend their jars to others. Chef was unable to handle the situation and decided to call off the cooking session for that day, so that he could get more jars and try it again later. You know that there are $N$ junior chefs (numbered $1$ through $N$) and for each valid $i$, the number of ingredients required for the dish of the $i$-th chef is $A\_i$. If there are $J$ jars, then formally, the following process happens: - The junior chefs take some jars; let's denote the number of jars taken by the $i$-th chef by $a\_i$. Any distribution of jars such that $0 \\le a\_i$ for each valid $i$ and $\\sum\_{i=1}^N a\_i = J$ is possible. - At any time, if $a\_i \\lt A\_i$ for each chef $i$ that has not prepared their dish yet, the cooking session is a failure. - Otherwise, one of the chefs who have at least as many jars as the number of required ingredients prepares their dish and returns their jars to the kitchen. - Whenever some jars are returned to the kitchen, they are immediately taken by some chefs that have not prepared their dishes yet (possibly all the jars by one chef). - This process continues with chefs taking jars, cooking their dishes and returning jars, until no chef can cook their dish anymore or all chefs have cooked their dishes. - When all junior chefs have successfully cooked their dishes, the cooking session ends successfully. Chef wants to know the minimum number of magical jars that should be present in the kitchen initially so that the session would be successful regardless of how the junior chefs pick up the jars. Chef is a legendary cook, but he is not very good at mathematics, so he asks you to find that number. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing one integer ― the minimum required number of jars. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^5$ - $1 \\le A\_i \\le 10^9$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 2 4 1 1 1 1 2 1 4 ``` ### Example Output ``` 1 4 ``` ### Explanation \*\*Example case 1:\*\* One of the junior chefs always picks up the only jar, cooks their dish and returns the jar back to the kitchen. Then, another junior chef picks up that jar, cooks their dish and returns the jar. This procedure can be repeated by each junior chef so that they can cook their recipe.
