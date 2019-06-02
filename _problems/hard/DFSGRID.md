---
category_name: hard
problem_code: DFSGRID
problem_name: 'Chef and The Recursive Algorithm'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: rustinpiece
problem_tester: Rubanenko
date_added: 2-08-2013
tags:
    - ad
    - cook37
    - implementation
    - medium
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/DFSGRID'
time:
    view_start_date: 1376852100
    submit_start_date: 1376852100
    visible_start_date: 1376852100
    end_date: 1735669800
    current: 1493556966
layout: problem
---
All submissions for this problem are available.There is a **RxC** grid where the rows are numbered by integers from **1** to **R** from top to bottom and columns are numbered by integers from **1** to **C** from left to right. Two cells of the grid are called adjacent if they share a common side.



Chef uses an algorithm which starts at a cell **(sr,sc)** of the grid and visits the unvisited adjacent cells inside the grid recursively. The order in which the adjacent cells are looked for are: right, down, left and up. Your job is to find out the number of different cells that would be visited when the cell **(tr,tc)** is found. Given below is the pseudocode of the algorithm:/>/>

<pre>
// A 2D boolean array to mark the visited cells
Let seen[1...R][1...C] be a 2D array initialized to false

// The visit counter to count the number of visited cells so far
visitcount = 0 

// This function visits the unvisited cells of the grid recursively
// R,C are the number of rows and columns of the grid
// r,c are the row and column number of the current cell 
// tr,tc are the row and column number of the target cell 
VISIT(R, C, r, c, tr, tc)
     // Increment the counter for number of visited cells
     visitcount = visitcount + 1 
  
     // Marks the cell at r,c as visited
     seen[r][c]=true           
  
     // Prints the value of visitcount when the cell(tr,tc) is found
     if r==tr and c==tc  
	    PRINT visitcount

     // Check for an unvisited cell inside grid at right
     if c+1 ≤ C and seen[r][c+1] == false 
	    VISIT(R,C,r,c+1,tr,tc)
    
     // Check for an unvisited cell inside grid at down
     if r+1 ≤ R and seen[r+1][c] == false 
	     VISIT(R,C,r+1,c,tr,tc)
  
     // Check for an unvisited cell inside grid at left
     if c-1 ≥ 1 and seen[r][c-1] == false 
	     VISIT(R,C,r,c-1,tr,tc)
  
     // Check for an unvisited cell inside grid at up
     if r-1 ≥ 1 and seen[r-1][c] == false 
	     VISIT(R,C,r-1,c,tr,tc)


</pre>
 The above algorithm is both time and memory inefficient. Your task is to produce the same output but more efficiently. That is to print the value of `visitcount` when the cell **(tr,tc)** is found, if the above algorithm is called with `VISIT(R,C,sr,sc,tr,tc)`.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Each of the following **T** lines contain six separated integers **R, C, sr, sc, tr and tc.**

### Output

 For each case output the number that would be produced by the algorithm given.

### Constraints

- **1** ≤ **T** ≤ **200000 (2\*105 )**
- **1** ≤ **R,C** ≤ **1000000000 (109 )**
- **1** ≤ **sr,tr** ≤ **R**
- **1** ≤ **sc,tc** ≤ **C**

### Example

<pre><b>Input:</b>
5
4 4 3 2 3 4
4 4 3 2 4 4
4 4 3 2 2 3
2 3 1 1 1 3  
2 3 1 1 1 1 

<b>Output:</b>
3
4
11
3
1
</pre>