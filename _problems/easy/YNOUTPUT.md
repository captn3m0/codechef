---
category_name: easy
problem_code: YNOUTPUT
problem_name: 'Forced Output'
languages_supported:
    - ADA
    - ASM
    - BASH
    - C
    - 'C99 strict'
    - CAML
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - GO
    - HASK
    - ICON
    - JAVA
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PHP
    - PIKE
    - PYTH
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: gamabunta
problem_tester: null
date_added: 7-08-2012
tags:
    - ad
    - cook25
    - gamabunta
time:
    view_start_date: 1345403903
    submit_start_date: 1345403903
    visible_start_date: 1345402200
    end_date: 1735669800
    current: 1493558197
layout: problem
---
All submissions for this problem are available.The state space of the output of this problem (and as a matter of fact, all the problems in this Cook-Off) is - 2 to the power T -
where T is the number of test cases (so be extra careful!). Each test case consists of T lines consisting of "YES" or "NO".
If a test case accurately represents the output that you would print for this file,
then print "YES" for this case. Print "NO" otherwise.

The output for a file is defined as the output for all the test cases one by one. If you output "YES" for test case 'x', then your output
must match the input for the test case 'x', and if and only if your output does not match the input for test case 'x', should you print "NO"
for that case.

### Input

The first Line contains a single number T, the number of test cases.

Each test case contains T lines. Each line is either "YES" or "NO". The T lines together represent the candidate output for this problem.

### Output

If the candidate-output (that you got in the input) is what you are going to print then print "YES", and
only if it is different, print "NO". The output for each case must be on a single line by itself.

### Constraints

<pre>1 ≤ T ≤ 100
There is only one unique valid output that you can print
</pre>### Sample Input

<pre>2
NO
NO
NO
YES
</pre>### Sample Output

<pre>NO
YES
</pre>### Explanation

Your output clearly matches the input for the second case. No other output can be valid for this file.
