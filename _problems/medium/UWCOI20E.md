---
{"category_name":"medium","problem_code":"UWCOI20E","problem_name":"Escape","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kimbj0709","problem_tester":null,"date_added":"24-02-2020","tags":{"0":"kimbj0709","1":"uwcoi20"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UWCOI20E","time":{"view_start_date":1582655400,"submit_start_date":1582655400,"visible_start_date":1582655400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI20E","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
While Kim notes down the different base plans possible, Soum pulls a lever from the control room, and Kim falls into a trapped cell! Has the JSA won the battle?

Unfortunately for the JSA, Kim is a genius, so he has obviously easily escaped from his cell. However, he found that his cell is only one in a large underground network of cells. Now he needs to find a way to escape!

Of course, since it is a prison, some of the cells are locked at all times. However, some prison guards are lazy and left the keys for a cell in another cell. Each key can only unlock one cell and each cell can only be unlocked by one key. If any cell does not have a corresponding key, it is unlocked.

The prison consists of $N$ cells labelled 1 to $N$ with cell 1 being Kim's starting position and cell $N$ being the exit of the underground prison network. Furthermore, there are $E$ bidirectional connections between cells. The $i$-th connection takes Kim $C_i$ seconds to pass through, and connects cells $A_i$ and $B_i$. Kim takes no time to pick up a key when he reaches a cell containing a key, and takes no time to unlock a door with a key. Cells 1 and $N$ never have any keys in them. Additionally, no two keys will ever be found in the same cell.

Can you help Kim find the minimum time it would take him to go from cell 1 to cell $N$?

###Input:

The first line of input contains 3 integers $N$, $E$ and $K$ denoting the number of cells, number of connections and the number of keys.

The following $E$ lines contain 3 integers, $A_i$, $B_i$ and $C_i$ showing that a connection exists between cell $A_i$ and $B_i$ taking $C_i$ time to traverse.

The following $K$ lines contain 2 integers, $L$ and $U$ denoting that the key for cell $U$ is located at cell $L$.

###Output:

Print one number $S$ which is the time from cell 1 to cell $N$. If this is not possible print -1.

The answer is guaranteed to fit into a 64 bit integer.

###Subtasks
For all subtasks, $5 \leq N \leq 100000$, $4 \leq E \leq 200000$, $0 \leq K \leq 12$. For all edges, $1 \leq A, B \leq N$, $1 \leq C \leq 10^9$. All key nodes and lock nodes are distinct. No cell contains both a key and a lock, and no cell contains more than one key or more than one lock. In addition, cells $1$ and $N$ will never have a key or lock. Connections may connect a node to itself, and multiple connections may exist between two nodes.

Subtask 1 [30 points]: $N \leq 20000$, $E \leq 100000$, $K = 0$

Subtask 2 [30 points]: $N \leq 10000$, $E \leq 20000$, $K \leq 6$

Subtask 3 [40 points]: $N \leq 100000$, $E \leq 200000$, $K \leq 12$

###Sample Input:
```
5 4 1
1 2 5
2 3 7
3 4 8
4 5 2
2 3
```
###Sample Output:
```
22
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>