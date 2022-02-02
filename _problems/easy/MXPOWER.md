---
{"category_name":"easy","problem_code":"MXPOWER","problem_name":"Transmutation Diamonds","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sachin_yadav","problem_tester":null,"date_added":"23-10-2019","tags":{"0":"dcod2019","1":"pre","2":"prefix","3":"sachin_yadav","4":"sachin_yadav"},"problem_difficulty_level":"Easy","best_tag":"Prefix Sum","editorial_url":"https://discuss.codechef.com/problems/MXPOWER","time":{"view_start_date":1572633000,"submit_start_date":1572633000,"visible_start_date":1572633000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MXPOWER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
In the nation of Amestris, people use transmutation circles for Alchemy, but in different regions of the world people have come up with different methods to harness the power of Alchemy.
In the nation of Creta, people use transmutation figures in the shape of a Diamond for Alchemy. Refer to the figure below to understand what a Diamond shape is.

The Elric brothers come to Creta to learn this form of Alchemy. For this Alchemy, the energy from the earth is used to deconstruct and reconstruct. Now Edward is standing on a piece of land, which can be considered to be a grid of dimensions $N \times N$. For every block of land, the energy it provides in Alchemy is given as $E_{ij}$. It is also possible for some block to have negative energy, in which case it reduces the power of transmutation diamond.

The power of transmutation from a diamond figure is the sum of the energies ( $E_{ij}$ ) of the blocks included in the transmutation diamond.   
  
Given that the diamond figure must lie inside the grid, find the maximum power that can be generated from any diamond transmutation figure. Note that you have to select at least one block.

![](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/DCOD2019/problem3.png =500x500)   

The above figure shows the smallest three diamonds shapes that can be formed in the grid.


### Input:
- The first line contains $T$, the number of test cases. Then the test cases follow. 
- For each test case, the first line contains $N$.
- Then $N$ lines follow, each containing $N$ integers. The $j^{th}$ integer in the $i^{th}$ line is $E_{ij}$.


### Output:
For each test case, output a single integer in a new line, denoting the maximum transmutation power of any diamond in the grid.

### Constraints 
- $1\leq T\leq 100$  
- $ 1 \leq N \leq 100$  
- $| E_{ij} | \leq 10^{9}$


### Sample Input:
```
3
1
-5
2
-1 1
1 1
3
-10 5 -50
26 -1 10
0 6 45
```

### Sample Output:
```
-5
1
46
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>