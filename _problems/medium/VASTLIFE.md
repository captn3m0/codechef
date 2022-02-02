---
{"category_name":"medium","problem_code":"VASTLIFE","problem_name":"Another Game of Life","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"vastolorde95","problem_tester":null,"date_added":"14-12-2018","tags":{"0":"vastolorde95"},"time":{"view_start_date":1544985000,"submit_start_date":1544985000,"visible_start_date":1544985000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>In 1970, John Conway created a cellular automaton, the Game of Life.

In this problem we will consider a modified version of the Game of Life called VastoLorde's Game of Life, and we will be focusing on just one single second of change. 

Suppose you start with grid $A$ which has dimensions $H \times W$. The top left cell being $A[1][1]$ and the bottom right cell being $A[H][W]$. Each cell $(i,j)$ of this grid is either "dead" or "alive". An alive cell is represented by 1 and a dead cell by 0. 

When Vasto clicks his fingers, this grid changes into a different grid, $B$. $B$'s dimensions are $(H-1) \times (W-1)$. The state of the $(i,j)$-th cell of $B$ is determined by the following rule:

Consider cells $A[i][j]$, $A[i+1][j]$, $A[i][j+1]$ and $A[i+1][j+1]$ i.e. the 2x2 block with $(i,j)$ at the top left corner. If exactly one diagonal of this 2x2 block is alive and the other two cells are dead, then the cell $B[i][j]$ will be alive. Otherwise, $B[i][j]$ will be dead. 

Formally, if either ($A[i][j] = 1, A[i+1][j+1] = 1, A[i+1][j] = 0, A[i][j+1] = 0$), or ($A[i][j] = 0, A[i+1][j+1] = 0, A[i+1][j] = 1, A[i][j+1] = 1$), then $B[i][j] = 1$. If neither of these two configurations are present, then $B[i][j] =0$.

For example, suppose $H=3$, $W=3$, and grid $A$ is

```
101  
011  
101  
```
This would change into the the following 2 x 2 $B$ grid:

```
10  
10  
```

Your task is, given grid $B$, determine the number of possible grids $A$ that will generate this grid when Vasto clicks his finger.

Print your answer modulo $10^9 + 7$

###Input:

- The first line of input contains a single integer, $T$, the number of testcases.
- The first line of each testcase contains two integers $W$ and $H$, the width and height of $B$. $H$ lines follow.
- The $i$-th line of each testcase contains $W$ space separated integers $B[i][1], B[i][2], \dots, B[i][W]$ such that the cell $B[i][j]$ of the grid is alive if $B[i][j]= 1$ and dead if $B[i][j] = 0$

###Output:
Print a single integer in a new line for each testcase, the number of grids $A$ that create the given grid $B$ modulo $10^9 + 7$

###Constraints 

- $1 \le T \le 10$
- $2 \le W \le 500$  
- $2 \le H \le 10$  
- $ B[i][j] \in \{0,1\}$  

###Sample Input:
```
1  
2 2  
1 1  
1 1  
```

###Sample Output:
```
2
```
	
###Explanation:
There are two 3x3 grids that $A$ could be, so that it changes into the 2x2 grid in the input. They are

```
101  
010  
101  

```

and
```
010  
101  
010
```