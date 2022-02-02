---
languages_supported:
    - NA
title: SPREAD
category: NA
old_version: true
problem_code: SPREAD
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Bob has n heap(s) of gravel (initially there are exactly c piece(s) in each). He wants to do m operation(s) with that heaps, each maybe:

- adding pieces of gravel onto the heaps from u to v, exactly k pieces for each,
- or querying "how many pieces of gravel are there in the heap p now?".

### Request

Help Bob do operations of the second type.

### Input

- The first line contains the integers n,m,c, respectively.
- m following lines, each forms: 
    - **S u v k** to describe an operation of the first type.
    - **Q p** to describe an operation of the second type.

***(Each integer on a same line, or between the characters S, Q and the integers is separated by at least one space character)***
### Output

For each operation of the second type, output (on a single line) an integer answering to the respective query (follows the respective Input order).

### Example

**Input:**```

7 5 0
Q 7
S 1 7 1
Q 3
S 1 3 1
Q 3
<pre>
**Output:**```

0
1
2
</pre>
### Limitations

- 0&lt;n≤106
- 0&lt;m≤250 000
- 0&lt;u≤v≤n
- 0≤c,k≤109
- 0&lt;p≤n
