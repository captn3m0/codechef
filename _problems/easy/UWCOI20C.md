---
{"category_name":"easy","problem_code":"UWCOI20C","problem_name":"Mercury Poisoning","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"astoria","problem_tester":null,"date_added":"24-02-2020","tags":{"0":"astoria","1":"easy","2":"uwcoi20"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UWCOI20C","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI20C","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Kim has broken in to the base, but after walking in circles, perplexed by the unintelligible base design of the JSA, he has found himself in a large, empty, and pure white, room. 

The room is a grid with $H*W$ cells, divided into $H$ rows and $W$ columns. The cell $(i,j)$ is at height $A[i][j]$. Unfortunately, his advanced sense of smell has allowed him to sense a mercury leak, probably brought in by Jishnu to end his meddling. The mercury leak has a power (which determines what height the mercury can reach before dissipating into harmless quantities) and a source cell. It spreads from cells it has already reached to other cells in the four cardinal directions: north, south, east, and west. (That is, the mercury can spread up, down, right, or left in the grid, but not diagonally.) Mercury can only spread to a cell if the cell's height is strictly less than the power value. 

Unfortunately, Kim does not exactly know the starting cell or the power value of the mercury leak. However, his impressive brain has determined that it must be one of $Q$ (power, starting cell) combinations. For each combination, he wants to find out how many cells are dangerous for him to go to: that is, how many cells will eventually be reached by the mercury. This will help him determine a suitable cell to stay in and slowly fix the leak from above.

Can you help Kim achieve this objective?

Note: If the starting cell's height is not less than the power level, the mercury immediately dissipates. So, in this case, output 0.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line in each testcase contains three integers, $H$, $W$, and $Q$.
- On the $2$nd to $(H+1)$th lines of each testcase: The $(i+1)$th line contains $W$ space-separated integers, representing the heights of the cells on the $i$th row of the grid.
- On the $(H+2)$th to $(H+Q+1)$th lines of each testcase: The $(i+H+1)$th line contains 3 space-separated integers, $r[i]$, $c[i]$, and $p[i]$, which represents a (power, starting cell) combination. For this specific combination, the mercury leak originates on the cell $(r[i],c[i])$ and has power $p[i]$.

### Output:
For each testcase, output $Q$ lines, with each line containing one integer. The $i$th line should output the number of dangerous cells, given that the leak originated on cell $(r[i],c[i])$ with power $p[i]$, as defined in the input. Read the sample and sample explanation for more details.

### Constraints 
- $1 \leq T \leq 2$   
- $1 \leq H \leq 1000$
- $1 \leq W \leq 1000$
- $1 \leq Q \leq 2*10^5$
- $1 \leq r[i] \leq H$ for all $i$
- $1 \leq c[i] \leq W$ for all $i$
- $0 \leq A[i][j] \leq 10^9$ for all $(i,j)$
- $0 \leq p[i] \leq 10^9$ for all $i$.


### Subtasks
- 10 points : $A[i][j] =$ constant $k$ for all $(i,j)$ (the heights of all cells are equal).   
- 20 points : $H=1$, $Q \leq 1000$.   
- 30 points: $r[i] =$ constant $x$, $c[i] =$ constant $y$ for all $i$ (the starting cell is fixed).   
- 40 points: No additional constraints.   

### Sample Input:
```
1
5 5 3
4 3 9 7 2
8 6 5 2 8
1 7 3 4 3
2 2 4 5 6
9 9 9 9 9
3 4 6
3 2 5
1 4 9
```
### Sample Output:
```
10
0
19
```
	
### EXPLANATION:
For the first query, the cell $(3,4)$ has height 4. The mercury can reach the following cells: $(2,3)$, $(2,4)$, $(3,1)$, $(3,3)$, $(3,4)$, $(3,5)$, $(4,1)$, $(4,2)$, $(4,3)$, $(4,4)$, for a total of 10. Note that it cannot reach cell $(4,5)$ because the height (6) is equal to the power value (6).

For the second query, the cell $(3,2)$ has height 7. Since the power value of 5 is less than or equal to the height of 7, the mercury immediately dissipates and so it reaches 0 cells.

For the third query, the mercury can reach all cells except the bottom row and the cell $(1,3)$.

Note that $(x,y)$ means the cell on the $x$-th row and $y$-th column.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>