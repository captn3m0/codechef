---
{"category_name":"easy","problem_code":"LEQEX","problem_name":"Equivalent Exchange of Triangles","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sachin_yadav","problem_tester":null,"date_added":"20-10-2019","tags":{"0":"bitmasking","1":"bitwise","2":"dcod2019","3":"easy","4":"sachin_yadav"},"problem_difficulty_level":"Easy-Medium","best_tag":"Bitwise Xor","editorial_url":"https://discuss.codechef.com/problems/LEQEX","time":{"view_start_date":1572633000,"submit_start_date":1572633000,"visible_start_date":1572633000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LEQEX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
"Humankind cannot gain anything without first giving something in return. To obtain, something of equal value must be lost. That is alchemy's first law of Equivalent Exchange. In those days, we really believed that to be the world's one, and only truth."
                                  -- Alphonse Elric
                                      
Now, here we have an equivalent exchange law for triangles which states that two right-angled isosceles triangles of the same color can be made into a square of the same color using Alchemy.
  
You are given $N$ right-angled isosceles **colored** triangles numbered from $1$ to $N$. For each triangle, the two equal sides have a length of $1$ unit. The Color of $i$-th triangle is given by $C_i$.

To create a tower, we choose some consecutive ($2 \times k)+1$ triangles for any $k \geq 0$. We then pick some $2 \times k$ of them (these need not be consecutive), and form $k$ pairs of triangles such that both triangles in pair have the same color. Also, each of the $2 \times k$ should be in exactly one pair. Then the two triangles in each pair are joined using Alchemy (following the law of equivalent exchange for triangles) to form squares and these $k$ squares are placed one upon other. The one remaining triangle is placed as a roof to the tower. This results in a tower of the height of $k$.

Find the maximum height of the tower that can be formed. 

In other words, you should select the largest consecutive segment of triangles, such that you can form a tower using every single one of those triangles. In particular, you leave out one triangle, which will form the roof, and the other triangles should all be paired up such that both triangles in a pair have the same colour.

### Input:
- The first line contains $T$, the number of test cases. Then the test cases follow. 
- For every test case, the first line contains $N$ denoting the number of triangles.
- For every test case, the second line contains $N$ space-separated integers $C_{i}$ denoting the color of the triangles. ( $1 \leq i \leq N$).


### Output:
For every test case, output a single integer denoting the maximum height of the tower that can be formed.

### Constraints   
- $1 \leq T \leq 100$  
- $1 \leq N \leq 10^{5}$  
- $1 \leq C_{i} \leq 30$ 
- Sum of $N$ over all test cases doesn't exceed $5\times 10^{5}$ 

### Sample Input:
```
4
14
5 4 2 2 3 2 1 3 2 7 4 9 9 9
3
1 2 1
3
1 1 1
5
1 2 3 4 1
```

### Sample Output:
```
3
1
1
0
```

### EXPLANATION:  
- #$1$: The subarray $[2, 2, 3, 2, 1, 3, 2]$ results in a tower of height $3$.
- #$2$: The subarray $[ 1, 2, 1 ]$ results in a tower of height $1$.
- #$3$: The subarray $[ 1, 1, 1 ]$ results in a tower of height $1$. 
- #$4$: The subarrays $[ 1 ]$, $[ 2 ]$ , $[ 3 ]$, $[ 4 ]$ and $[ 1 ]$ all results in a tower of height $0$.
    
![](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/DCOD2019/problem2.png =500x500)

The above tower is possible by subarray $[2, 2, 3, 2, 1, 3, 2]$ resulting in a height of $3$ in test case $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>