---
languages_supported:
    - NA
title: ECODE
category: NA
old_version: true
problem_code: ECODE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Professor X got lost in a maze of an ancient tomb in Egypt. While he was finding the way to escape, he got a message of the tomb builders on the old walls:

- The code to open the exit door is the sequence C of n digits formed c1..cn (ci∈\[0,9\] ).
- For every sequence C, combining with the given integers A,B, call:
  
  - h0=0
  - hi=(hi-1×A+ci) mod B
- The smallest sequence C (in lexicological order) satisfying hn=G (where G is a given integer) is the exit code which professor X needs. 
  - 1≤n≤12
  - 10≤A,B≤1015
  - 0≤G<B
  - The input satisfies that the answer always exist.
### Request

Give the integers n,A,B,G, help professor X find out the exit code! ### Input

One and only line contains the integers n,A,B,G, respectively, each of them is separated with at least one space character.

### Output

Output in a single line the exit code found.

### Example

**Input:**
<pre>3 11 111 92
</pre>**Output:**```
084
<pre>### Limitations

\* 1<=n<=12

\* 10<=A,B<=1015

\* 0<=G<B

\* The input satisfies that the answer always exist.
