---
{"category_name":"easy","problem_code":"LAYERS","problem_name":"Recipe for Philosopher Stone","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sachin_yadav","problem_tester":null,"date_added":"20-10-2019","tags":{"0":"dcod2019","1":"geometry","2":"lazy","3":"sachin_yadav","4":"sachin_yadav","5":"segment","6":"set"},"problem_difficulty_level":"Easy","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/LAYERS","time":{"view_start_date":1572633000,"submit_start_date":1572633000,"visible_start_date":1572633000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LAYERS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
With the help of Sheska, Edward now has the research notes of Dr. Marcho. To prevent the secret of Philosopher stone falling into the wrong hands, Marcho has encoded the secret in the form of a list of triplets of numbers. Edward remembers that Dr. Marcho gave him a hint while he was leaving, "Sometimes you should try transmutation rectangles instead of circles, maybe they are better for making philosopher stones". Edward first thought that this was a joke, but he has understood the hint now. He interprets each triplet as the length, breadth, and color of a rectangle centered at the origin. Given below is his interpretation to decode the numbers.
   
There are $N$ **colored** rectangles numbered from $1$ to $N$, with the $i$-th rectangle having length $L_{i}$, breadth $B_{i}$ and color $C_{i}$. Each rectangle is **centered at the origin**. That is, if for any rectangle, we draw both diagonals, the diagonals shall intersect at the origin. For example, a rectangle having length 10 and breadth 2 would have its 4 corners as (5, 1), (5, -1), (-5, 1) and (-5, -1). 

The rectangles are placed one over the other. Specifically, the rectangles are placed in the order in which they appear in the input, overlapping the previous rectangles. The rectangle $i$ is partially hidden by the rectangle $j$ if $j$ > $i$. That is, only the colour of the top rectangle is visible in the overlapping region.  
   
Edward believes that the ratio of the area of each color in the final figure is pointing to some ratio of ingredients for making the philosopher stone.
  
Can you find out how many unit squares of each colour are visible in the final figure?

### Input:
- The first line contains $T$, the number of test cases. Then the test cases follow. 
- For each test case, the first line consists of $N$, denoting the number of rectangles and $C$  denoting the number of colours.
- For each test case, $N$ lines follow, the $i$-th of which contains three integers $L_{i}$, $B_{i}$ and $C_{i}$ describing length, breadth and color of the $i$-th rectangle respectively.

### Output:
For each test case, output a single line containing $C$ space-separated integers denoting the number of unit squares of each color $1$ to $C$ visible in the final figure.

### Constraints 
- $1 \leq T \leq 50$  
- $1 \leq N \leq 10^{5}$  
- $1 \leq C \leq 100$  
- $2 \leq L_{i} \leq 10^{9}$  
- $2 \leq B_{i} \leq 10^{9}$ 
- $L_{i}$ and $B_{i}$ are even for all $1 \leq i \leq N$
- $1 \leq C_{i} \leq C$
- Sum of $N$ over all test cases doesn't exceed $10^{6}$

### Sample Input:
```
1
5 4
2 2 1
2 8 3
10 2 1
8 4 2
4 6 4
```

### Sample Output:
```
4 16 4 24
```

### EXPLANATION:   
![](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/DCOD2019/image3.png =500x432)
    
In the above figure, Green represents color $1$, Blue represents color $2$, Yellow represents color $3$,  and Red color represents color $4$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>