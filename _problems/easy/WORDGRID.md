---
{"category_name":"easy","problem_code":"WORDGRID","problem_name":"Word Grid","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"20-10-2018","tags":{"0":"balajiganapath"},"time":{"view_start_date":1540314000,"submit_start_date":1540314000,"visible_start_date":1540314000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given a set of $n$ words, each of length 4. All characters are uppercase English alphabets. You have to construct a 4x4 grid of letters such that each of the $n$ words appears atleast once. 

A word is said to appear in a grid if the word appears in a row or column in any of the two directions (ie. if it is a column, it can either be top to bottom, or bottom to top. And if it is a row, it can either be left to right, or right to left).

If there are many such grids, return the lexicographically smallest grid.

A grid A is said to be lexicographically smaller than grid B if A has the smaller letter in the first unequal square (in row major order from top to bottom, left to right). That is, you first check if there is any unequality in the first row, and if not in the second row, etc. And in each row, you check from left to right.

If there are no such grids, print the word "grid's not possible" in the form of 4x4 grid without the punctuations or spaces i.e.

```
grid
snot
poss
ible
```

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase will start with $n$, the number of words in the input.
- Each of the next $n$ lines will contain a word of length 4.

###Output:
For each testcase, output the lexicographically smallest 4x4 grid containing all the given words or if that is not possible, print the not possible grid given in the statement.

Output a blank line after each test case.

###Constraints 
- $1 \leq T \leq 50$
- $1 \leq n \leq 32$
- All the characters in the $n$ words are uppercase English alphabets. ie. 'A' to 'Z'.

###Sample Input:
```
2
6
CODE
TRAP
ARCS
CART
ROAD
PART
5
ABCD
EFGH
IJKL
MNOP
QRST
```


###Sample Output:
```
CART
OROR
DCAA
ESDP

grid
snot
poss
ible

```
	
###Explanation:

**Example 1**:

__Case 1__

- CODE occurs in the first column (top to bottom)
- TRAP in the fourth column (top to bottom)
- ARCS in the second column (top to bottom)
- CART in the first row (left to right)
- ROAD in the third column (top to bottom)
- PART in the fourth column (bottom to top)


__Case 2__

There is no 4x4 grid that can have all the given words