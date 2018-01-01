---
category_name: easy
problem_code: DIRECTI
problem_name: 'Reversing directions'
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
problem_author: pieguy
problem_tester: anton_lunyov
date_added: 26-11-2012
tags:
    - ad
    - cakewalk
    - cook29
    - pieguy
editorial_url: 'http://discuss.codechef.com/problems/DIRECTI'
time:
    view_start_date: 1356288330
    submit_start_date: 1356288330
    visible_start_date: 1356288262
    end_date: 1735669800
    current: 1493558137
layout: problem
---
All submissions for this problem are available.Chef recently printed directions from his home to a hot new restaurant across the town, but forgot to print the directions to get back home. Help Chef to transform the directions to get home from the restaurant.

A set of directions consists of several instructions. The first instruction is of the form "Begin on XXX", indicating the street that the route begins on. Each subsequent instruction is of the form "Left on XXX" or "Right on XXX", indicating a turn onto the specified road.

When reversing directions, all left turns become right turns and vice versa, and the order of roads and turns is reversed. See the sample input for examples.

### Input

Input will begin with an integer **T**, the number of test cases that follow. Each test case begins with an integer **N**, the number of instructions in the route. **N** lines follow, each with exactly one instruction in the format described above.

### Output

For each test case, print the directions of the reversed route, one instruction per line. Print a blank line after each test case.

### Constraints

- 1 ≤ **T** ≤ 15
- 2 ≤ **N** ≤ 40
- Each line in the input will contain at most 50 characters, will contain only alphanumeric characters and spaces and will not contain consecutive spaces nor trailing spaces. By alphanumeric characters we mean digits and letters of the English alphabet (lowercase and uppercase).

### Sample Input

<pre>2
4
Begin on Road A
Right on Road B
Right on Road C
Left on Road D
6
Begin on Old Madras Road
Left on Domlur Flyover
Left on 100 Feet Road
Right on Sarjapur Road
Right on Hosur Road
Right on Ganapathi Temple Road

</pre>### Sample Output
<pre>Begin on Road D
Right on Road C
Left on Road B
Left on Road A

Begin on Ganapathi Temple Road
Left on Hosur Road
Left on Sarjapur Road
Left on 100 Feet Road
Right on Domlur Flyover
Right on Old Madras Road


</pre>### Explanation
In the first test case, the destination lies on Road D, hence the reversed route begins on Road D. The final turn in the original route is turning left from Road C onto Road D. The reverse of this, turning right from Road D onto Road C, is the first turn in the reversed route.
