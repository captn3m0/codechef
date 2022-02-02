---
{"category_name":"easy","problem_code":"ADTCHP","problem_name":"A DT Chip","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hackcyborg","problem_tester":"","date_added":"16-12-2020","tags":{"0":"bytr2020","1":"easy","2":"hackcyborg"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ADTCHP","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ADTCHP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Cyberverse is in the form of a rectangular grid of $N$ rows and $M$ columns. There is one cyborg living in each cell of the grid. The rows of the grid are numbered from $1$ to $N$, top to bottom. The columns of the grid numbered from $1$ to $M$, left to right.
       
Each cell contains a DT chip designed by doctor Aditi and each DT chip is connected with 4 side adjacent DT chips ( if it exists) in the grid.           

Initially all DT chips are working. Hence every cyborg in cyberverse can communicate with each other. DT chip at $(x, y)$ is directly connected to its 4 neighboring DT chips and Cyborg at $(x1, y1)$ can communicate with cyborg at $(x2, y2)$ if and only if there exists a path of connected working DT chips between them. Cyborg Vaishakh wants to destroy the cyberverse so he starts with taking down communication. Doctor Aditi will have to keep a check on the connectivity of the cyborgs in order to build a better DT chip from time to time. 

In total $Q$ events take place and there are only two types of events.

In the first type, Vaishakh can cut connections of every cyborg present in some sub-rectangle, with every other cyborg outside the sub-rectangle. The top-leftmost cell of sub-rectangle will be $(x1, y1)$ and down-rightmost cell will be $(x2, y2)$.    
**All the sub-rectangles in first type of event are non overlapping. But they can be nested. Consider sub-rectangles as hollow rectangular frames**

In second type, given two cells $(x1,y1)$ and $(x2,y2)$, Doctor Aditi checks if cyborgs living in those cells can communicate with each other or not.

Since Doctor Aditi is busy upgrading DT chips. Help her to save the cyberverse.

### Input:

- The first line of input contains three space-separated integers $N$, $M$, and $Q$ respectively.  
- Each of the next $Q$ lines will contain 5 space-separated integers in one of the two forms:   
$1\:x1\:y1\:x2\:y2$    
$2\:x1\:y1\:x2\:y2$    
- If the first integer is $1$, it represents event of first type with $(x1, y1)$ as top-leftmost cell of subrectangle and $(x2,y2)$ as down-rightmost cell of the subrectangle.
- If the first integer is $2$, it represents event of second type with $(x1, y1)$ as first cell and $(x2, y2)$ as second cell.

### Output:
For each event of second type, print $YES$ if two cyborgs can communicate with each other and  $NO$ if they cannot.    
**Please note that output is case sensitive**. 

### Constraints:

- $1 \leq Q \leq 300000$
- $1 \leq N*M \leq 200000$
- $1 \leq x1,x2 \leq N$
- $1 \leq y1,y2 \leq M$
- All the sub-rectangles in first type of event are non overlapping. But they can be nested.

### Sample Input 1:

```
4 5 3
1 1 2 4 4
2 2 3 3 3
2 1 1 4 5
```

### Sample output 1:

```
YES
NO
```
### Sample Input 2:

```
5 6 3
1 2 2 5 5
2 1 1 5 6
2 1 1 3 4
```

### Sample output 2:

```
YES
NO
```

### Explanation:

- Here ``B`` represents disconnected DT chips and ``D`` represents working DT chips   
- In Sample $1$:  $N=4,M=5$    

```
DDDDD
DDDDD
DDDDD
DDDDD
```
If Cyborg Vaishakh Disconnected rectangle $((1,2),(4,4))$
```
DBBBD
DBDBD
DBDBD
DBBBD
```
Then the grid will become like this 

so cyborg at $(2,3)$ can communicate with cyborg at $(3,3)$ but Cyborg at $(1,1)$ can not communicate with cyborg at $(4,5)$

- In Sample $2$:  $N=5,M=6$
```
DDDDDD
DDDDDD
DDDDDD
DDDDDD
DDDDDD
```
If Cyborg Vaishakh Disconnected rectangle $((2,2),(5,5))$
```
DDDDDD
DBBBBD
DBDDBD
DBDDBD
DBBBBD
```
Then the grid will become like this 

so cyborg at $(1,1)$ can communicate with cyborg at $(5,6)$ but not with cyborg at $(3,4)$
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>