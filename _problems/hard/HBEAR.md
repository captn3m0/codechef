---
languages_supported:
    - NA
title: HBEAR
category: NA
old_version: true
problem_code: HBEAR
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Little Bear had just come back from school. He was very hungry that time and wanted at least K units of honey to satisfy his hunger. He immediately went to a rectangular field of size N x M to collect some honey. He wanted to collect honey only in a special sub-rectangle which has size S x T where S<=A and T<=B, for some fixed A and B. He has Q queries, each query contains A, B. For each query, he wanted to know how many special sub-rectangles contain at least K units of honey.

### Input

The first line of the input contains integers N, M and K(1<=N, M<=300, 1<=K<=N\*M). The next N lines contain M characters (either 'H' or '.'). 'H' means there is honey in that cell, while '.' means there is no honey in that cell. The next line contains an integer Q (1<=Q<=100 000). The next Q lines contain integers A and B (1<=A<=N , 1<=B<=M).

### Output

The output contains Q lines, each line contains the number of special sub-rectangles which satisfy the requirement. (The amount of honey is at least K inside the special sub-rectangle)

### Example

```

<b>Input:</b>
```

5 5 4
H.H..
..H..
H...H
HHHH.
HH..H
2
1 1
2 3

```
<b>Output:</b>

0
4


```
**Explanation for 2nd query**
```

#: means the chosen cell
The possibilities are:
1. Size 2 x 3
H.H..
..H..
###.H
###H.
HH..H

2. Size 2 x 3
H.H..
..H..
H...H
###H.
###.H

3. Size 2 x 3
H.H..
..H..
H...H
H###.
H###H

4. Size 2 x 2
H.H..
..H..
H...H
##HH.
##..H

```
Note that in 2nd query, the possible special sub-rectangles are of size 1x1, 1x2, 1x3, 2x1, 2x2, 2x3. Also note that 2x3 is different from 3x2