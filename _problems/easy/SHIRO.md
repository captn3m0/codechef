---
category_name: easy
problem_code: SHIRO
problem_name: 'Save The Princess'
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
problem_tester: white_king
date_added: 27-03-2013
tags:
    - aug13
    - dynamic
    - easy
    - simple
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/SHIRO'
time:
    view_start_date: 1376299800
    submit_start_date: 1376299800
    visible_start_date: 1376299800
    end_date: 1735669800
    current: 1493558188
layout: problem
---
All submissions for this problem are available.Shiro is leading an army to save the princess of his kingdom "Abra". The princess has been made a prisoner by the neighboring kingdom "Kadabra". Kadabra is a magical land and is full of challenges. Shiro's army has to pass **N** levels before they can get to the princess. After each level, the army gets a few flags to carry along. The flags can either all be of kindom Abra OR all of kingdom Kadabra. The magic of Kadabra forces Shiro's army to carry the flags irrespective of which kingdom they belong to. The princess doesn't know Shiro or anyone from his army. She will not escape with them unless she can trust them. She will trust them only if the number of Abra's flags they are carrying is atleast as much as the number of Kadabra's flags.

The army gets **ai** flags at the end of the ith level. Probability that flags received at the end of the ith level will be Abra's flags is **pi**. Your task is to tell Shiro what is the probability that the princess will trust him once they reach her.

### Input:

First line of input contains a single integer **T**, the number of test cases.

Each test starts with a single line having an integer, **N**, the number of levels in Kadabra.

Next line contains contains **N** integers with the ith integer being **ai** as described above.

Next line contains contains **N** integers with the ith integer being **pi** as described above. Note that the probabilities given will be in percents.

### Output:

For each test case, output a line containing the required probability. The answer will be accepted if the relative error is not more than 10-6.

### Constraints:

<pre>
1 ≤ <b>T</b> ≤ 100
1 ≤ <b>N</b> ≤ 100
1 ≤ <b>a<sub>i</sub></b> ≤ 100
0 ≤ <b>p<sub>i</sub></b> ≤ 100

</pre>
### Example:

**Input:**

<pre>
2
5
1 2 3 4 4
0 100 100 0 50
2
5 5
50 60

</pre>
**Output:**

<pre>
0.5000000
0.8000000


</pre>
**Update:**

Difference in answer upto 1e-6 will be ignored.
