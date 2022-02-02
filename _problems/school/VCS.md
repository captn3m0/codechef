---
category_name: school
problem_code: VCS
problem_name: 'Version Control System'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: stzgd
date_added: 16-03-2015
tags:
    - cakewalk
    - cook57
    - kostya_by
    - sets
editorial_url: 'http://discuss.codechef.com/problems/VCS'
time:
    view_start_date: 1429470000
    submit_start_date: 1429470000
    visible_start_date: 1429470000
    end_date: 1735669800
    current: 1492507579
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK57/mandarin/VCS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK57/russian/VCS.pdf) as well.

 A *version control system*(VCS) is a repository of files, often the files for the source code of computer programs, with monitored access. Every change made to the source is tracked, along with who made the change, why they made it, and references to problems fixed, or enhancements introduced, by the change.

 Version control systems are essential for any form of distributed, collaborative development. Whether it is the history of a wiki page or large software development project, the ability to track each change as it was made, and to reverse changes when necessary can make all the difference between a well managed and controlled process and an uncontrolled ‘first come, first served’ system. It can also serve as a mechanism for due diligence for software projects.

 In this problem we'll consider a simplified model of a development project. Let's suppose, that there are **N** source files in the project. All the source files are distinct and numbered from 1 to **N**.

 A VCS, that is used for maintaining the project, contains two sequences of source files. The first sequence contains the source files, that are ignored by the VCS. If a source file is not in the first sequence, then it's considered to be unignored. The second sequence contains the source files, that are tracked by the VCS. If a source file is not in the second sequence, then it's considered to be untracked. A source file can either be or not be in any of these two sequences.

 Your task is to calculate two values: the number of source files of the project, that are both tracked and ignored, and the number of source files of the project, that are both untracked and unignored.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of the test case description contains three integers **N**, **M** and **K** denoting the number of source files in the project, the number of ignored source files and the number of tracked source files.

The second line contains **M** distinct integers denoting the sequence **A** of ignored source files. The sequence is strictly increasing.

The third line contains **K** distinct integers denoting the sequence **B** of tracked source files. The sequence is strictly increasing.

### Output

For each test case, output a single line containing two integers: the number of the source files, that are both tracked and ignored, and the number of the source files, that are both untracked and unignored.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **M**, **K** ≤ **N** ≤ 100
- 1 ≤ **A1** &lt; **A2** &lt; ... &lt; **AM** ≤ **N**
- 1 ≤ **B1** &lt; **B2** &lt; ... &lt; **BK** ≤ **N**

### Example

<pre><b>Input:</b>
2
7 4 6
1 4 6 7
1 2 3 4 6 7
4 2 2
1 4
3 4

<b>Output:</b>
4 1
1 1

</pre>
### Explanation

 In the first test case, the source files {1, 4, 6, 7} are both tracked and ignored, the source file {5} is both untracked and unignored.

 In the second test case, the source file {4} is both tracked and ignored, the source file {2} is both untracked and unignored.
