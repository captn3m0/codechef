---
category_name: easy
problem_code: ATTIC
problem_name: 'Attic Crossing'
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
max_timelimit: '3.5'
source_sizelimit: '50000'
problem_author: pragrame
problem_tester: tuananh93
date_added: 3-06-2013
tags:
    - ad
    - cakewalk
    - cook35
    - pragrame
editorial_url: 'http://discuss.codechef.com/problems/ATTIC'
time:
    view_start_date: 1372012200
    submit_start_date: 1372012200
    visible_start_date: 1414769400
    end_date: 1735669800
    current: 1493558108
layout: problem
---
All submissions for this problem are available.Digory Kirke and Polly Plummer are two kids living next door to each other. The attics of the two houses are connected to each other through a passage. Digory's Uncle Andrew has been secretly doing strange things in the attic of his house, and he always ensures that the room is locked. Being curious, Digory suspects that there is another route into the attic through Polly's house, and being curious as kids always are, they wish to find out what it is that Uncle Andrew is secretly up to.

So they start from Polly's house, and walk along the passageway to Digory's. Unfortunately, along the way, they suddenly find that some of the floorboards are missing, and that taking a step forward would have them plummet to their deaths below.

Dejected, but determined, they return to Polly's house, and decide to practice long-jumping in the yard before they re-attempt the crossing of the passage. It takes them exactly one day to master long-jumping a certain length. Also, once they have mastered jumping a particular length L, they are able to jump any amount less than equal to L as well.

The next day they return to their mission, but somehow find that there is another place further up the passage, that requires them to jump even more than they had practiced for. So they go back and repeat the process.

Note the following:

- At each point, they are able to sense only how much they need to jump at that point, and have no idea of the further reaches of the passage till they reach there. That is, they are able to only see how far ahead is the next floorboard.
- The amount they choose to practice for their jump is exactly the amount they need to get across that particular part of the passage. That is, if they can currently jump upto a length **L0**, and they require to jump a length **L1**(> L0) at that point, they will practice jumping length **L1** that day.
- They start by being able to "jump" a length of 1.

Find how many days it will take them to cross the passageway. In the input, the passageway is described as a string **P** of '#'s and '.'s. A '#' represents a floorboard, while a '.' represents the absence of a floorboard. The string, when read from left to right, describes the passage from Polly's house to Digory's, and not vice-versa.

### Input

The first line consists of a single integer **T**, the number of testcases.
Each of the next **T** lines consist of the string **P** for that case.

### Output

For each case, output the number of days it takes them to cross the passage.

### Constraints

- **1** ≤ **T** ≤ **1,000,000** (**106**)
- **1** ≤ |**P**| ≤ **1,000,000** (**106**)
- _The total length of **P** will be ≤ **5,000,000** (**5 \* 106**)across all test-cases of a test-file_
- **P** will consist of only the characters # and .
- The first and the last characters of **P** will be #.

### Example

<pre>
<b>Input:</b>
4
####
##.#..#
##..#.#
##.#....#

<b>Output:</b>
0
2
1
2
</pre>### Explanation

For the first example, they do not need to learn any jump size. They are able to cross the entire passage by "jumping" lengths 1-1-1.

For the second example case, they get stuck at the first '.', and take one day learning to jump length 2. When they come back the next day, they get stuck at '..' and take one day to learn to jump length 3.

For the third example case, they get stuck first at '..', and they take one day to learn to jump length 3. On the second day, they are able to jump both length 3 as well as length 2 required to cross the passage.

For the last test case they need to stop and learn jumping two times. At first they need to jump a length 2 and then a length 5.

### Appendix

Irrelevant to the problem description, if you're curious about what Uncle Andrew was up to, he was experimenting on Magic Rings that could facilitate travel between worlds. One such world, as some of you might have heard of, was Narnia.
