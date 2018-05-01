---
languages_supported:
    - NA
title: STREDUC
category: NA
old_version: true
problem_code: STREDUC
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Give a string s of length l, and a set S of n sample string(s). We do reduce the string s using the set S by this way:

- Wherever Si appears as a consecutive substring of the string s, you can delete (or not) it.
- After each deletion, you will get a new string s by joining the part to the left and to the right of the deleted substring.

### Request

By that way, try to reduce the given string s to get a new string of minimum length. You can do delete for unlimited times.

### Input

- The first line contains the string s.
- The second line contains the integer n.
- Within the last n lines, the i-th line contains the string Si.

### Output

Output on a single line an integer which is the minimum length found.

### Example

**Input:**

<pre>aaabccd
3
abc
ac
aaa
</pre>**Output:**

<pre>2
</pre>### Limitations

- 0<l≤250
- 0<n≤30
- 0<|Si|≤20

**NOTE:** Because the testcases were created in Windows environment so it may be different from the Unix systems. The problems occur when using getline or gets because they tend to read '\\r'. Instead using scanf("%s") or cin suffices for the given problem.
