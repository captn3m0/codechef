---
category_name: hard
problem_code: SEGMENTQ
problem_name: 'Segment Queries'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: errichto
date_added: 16-01-2017
tags:
    - ltime44
    - medium
    - range
    - segment
    - xcwgf666
editorial_url: 'https://discuss.codechef.com/problems/SEGMENTQ'
time:
    view_start_date: 1485622800
    submit_start_date: 1485622800
    visible_start_date: 1485622800
    end_date: 1735669800
    current: 1493556839
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME44/mandarin/SEGMENTQ.pdf), [Russian](http://www.codechef.com/download/translated/LTIME44/russian/SEGMENTQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME44/vietnamese/SEGMENTQ.pdf) as well.

Consider a 1D-grid with **N** points, numbered **1**, **2**, ..., **N** from left to right. The segment is denoted by a pair \[**L**, **R**\] and contains all the points with the indices between **L** and **R** inclusively.

Some of the points can be marked. Initially all the points are unmarked.

Sergey wants to develop a data structure that would help him to answer the following two types of queries efficiently on the segments:

- **0 L R** : Add a segment, which starts at **L** and ends at **R** to the data structure if it has at least one un-marked point. During the operations, there can be multiple segments with the same end points.
- **1 P** : Mark the point **P** and output the number of the segments that have **just** become activated. The segment is activated when all it's points are marked. In other words, you have to tell the number of segments added in the data structure that were earlier deactivated, but now have become activated due to the marking of point **P**.

Please help Sergey to construct a suitable data structure. This is an _on-line_ problem. That means that you won't see the next query until you answer the previous one; in other words that means that you will see only one query at a time. For seeing next query, you must answer the current query.

### Input

The first line of the input contains a pair of integers **N** and **Q** denoting the number of points and the number of queries.

Then you will get a query in one of two forms described above. Please flush the standard output after answering a query to be able to read the following one. The details about flushing the standard output can be seen in the Note section at the end of the statement.

### Output

After each query of the type **1**, output the number of just activated segments.

### Constraints

- No point will be marked twice or more times.
- **1** ≤ **P** ≤ **N**
- **1** ≤ **L** ≤ **R** ≤ **N**

### Subtasks

- **Subtask #1 (18 points):** **1** ≤ **N, Q** ≤ **104**
- **Subtask #2 (41 point):** **1** ≤ **N, Q** ≤ **105**
- **Subtask #3 (41 point):** **1** ≤ **N, Q** ≤ **106**

### Example

```
<b>Input:</b>
<tt>3 7
0 1 2
0 2 3
1 2
0 2 2
0 3 3
1 3
1 1</tt>

<b>Output:</b>
<tt>0
2
1</tt>

```
### Explanation

**Example case 1.** In the first two queries, we add the segments **\[1, 2\]** and **\[2, 3\]**, respectively. The we first mark the point **2**, the only segment that can be activated is **\[2; 2\]**. But since such segment is not yet present in the data structure, nothing will be activated that time.

Then we try to add the segment **\[2, 2\]**. Please note that it won't be added, because all its' points are marked already. So nothing will happen on this addition.

When we mark the point **3**, the following segments are activated: **\[2, 3\]** (added in the second query) and **\[3, 3\]** (added in the fifth query). That's why the answer after this query is **2**.

On the last query all the points will become marked and the remaining segment **\[1, 2\]** will become activated. So the answer is **1**.

### Note

You can flush the standard output by using fflush(stdout) in C++, System.out.flush() in Java, sys.stdout.flush() in Python. Flushing the standard output means, that it will force the standard output stream to write any buffered characters.