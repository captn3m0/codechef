---
{"category_name":"challenge","problem_code":"SEBICPU","problem_name":"(Challenge) Sebi and CPU Design","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"istva_adm","problem_tester":null,"date_added":"26-08-2019","tags":{"0":"istva_adm"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1568626202,"submit_start_date":1568626202,"visible_start_date":1568626202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SEBICPU","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT19/mandarin/SEBICPU.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT19/bengali/SEBICPU.pdf), [Russian](https://www.codechef.com/download/translated/SEPT19/russian/SEBICPU.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT19/vietnamese/SEBICPU.pdf) as well.

The King of Chefland is a fan of triplets, especially Pythagorean triplets. His son, prince Sebi, designed the first CPU of Chefland.

Nobody wants to argue with the son of the king, so everybody agrees that he is a great hardware designer. However, he forgot a lot of important instructions, like assigning a constant to a register. Chefland is now looking for a programmer who can load some given triplets to registers quickly.

**Architecture of Sebi's CPU:**
- There are four 64-bit registers based on the [X64 architecture](https://docs.microsoft.com/en-us/windows-hardware/drivers/debugger/x64-architecture). These registers are named `rax`, `rbx`, `rcx` and `rdx`.
- Parts of each 64-bit register can be used as smaller registers. For `y` equal to `a`, `b`, `c` or `d`, we have the following registers:
    - `eyx`: the lower (least significant) 32 bits of `ryx`
    - `yx`: the lower 16 bits of `ryx`
    - `yl`: the lower 8 bits of `ryx`
    - `yh`: the upper 8 bits of `yx`
- The CPU cannot access any memory storage other than these registers.
- The CPU supports several instructions based on assembly languages. Each instruction takes one or two registers as operands. Immediate values as operands are not supported. If an instruction takes two operands, they do not have to be distinct.
- If an instruction takes two operands, they must have registers with the same width (number of bits). When the operands of an instruction are registers with width $b$, the values stored in them are treated as unsigned $b$-bit integers.
- An instruction on registers with width $b$ computes a result ― an unsigned $b$-bit integer ― and stores it in the register given as the first operand. In case of overflow or underflow, the result is treated as computed modulo $2^b$; all bits outside the first-operand register remain unchanged.
- The available one-operand instructions and their results are:
    - `dec reg`: `reg` minus $1$
    - `inc reg`: `reg` plus $1$
    - `not reg`: bitwise NOT of `reg`
- The available two-operand instructions and their results are:
    - `and reg1 reg2`: bitwise AND of `reg1` and `reg2`
    - `or reg1 reg2`: bitwise OR of `reg1` and `reg2`
    - `xor reg1 reg2`: bitwise XOR of `reg1` and `reg2`
    - `shl reg1 reg2`: `reg1` shifted left by `reg2` bits (and inserts `reg2` $0$-s as the least significant bits)
    - `shr reg1 reg2`: `reg1` shifted right by `reg2` bits (and inserts `reg2` $0$-s as the most significant bits)
    - `add reg1 reg2`: `reg1` plus `reg2`
    - `sub reg1 reg2`: `reg1` minus `reg2`
    - `mul reg1 reg2`: `reg1` multiplied by `reg2`
    - `div reg1 reg2`: `reg1` divided by `reg2` (integer division)
    - `mod reg1 reg2`: `reg1` modulo `reg2` (remainder of `reg1` after division by `reg2`)
    - `mov reg1 reg2`: `reg2` (the instruction copies the value of `reg2` to `reg1`)
- The only operations where the result could overflow are `shl`, `add`, `sub`, `mul`, `inc` and `dec`. In `sub` and `dec`, the result of $i-j$ modulo $2^b$ for $j \gt i$ is $2^b + i - j$. In all other instructions, modulo simply corresponds to discarding all except the least significant $b$ bits.
- It is not allowed to use the `div` or `mod` operation if `reg2` contains $0$.

Initially, all four registers contain $0$-s. You are given $N$ triplets of 64-bit integers $(a_1, b_1, c_1), (a_2, b_2, c_2), \ldots, (a_N, b_N, c_N)$ and you should write a program (a sequence of instructions) such that each triplet appears in the registers at some point during the execution of this program. The order in which they appear does not matter. Formally, for each valid $i$, there should be an instruction in your program such that **immediately** after this instruction is executed, one of the registers contains the value $a_i$, one contains $b_i$ and one contains $c_i$ (the fourth register may contain anything).

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains three space-separated integers $a_i$, $b_i$ and $c_i$.

### Output
- First, print a line containing a single integer $P$ ― the number of instructions in your program.
- Then, print $P$ lines. For each valid $i$, the $i$-th of these lines should contain the $i$-th instruction from your program in the format described above.

### Constraints
- $N = 64$
- $0 \le a_i, b_i, c_i \lt 2^{64}$ for each valid $i$
- $a_i \neq b_i$, $b_i \neq c_i$, $a_i \neq c_i$ for each valid $i$

### Scoring
If your program attempts to divide anything by zero or compute anything modulo zero, your submission will receive the Wrong Answer verdict.

If $P$ exceeds $N \cdot 500$, your submission will also receive the Wrong Answer verdict. Otherwise, the score of your program is equal to $P$. Your goal is to minimise this number.

There are ten test files. During the contest, the displayed score will account for exactly three test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 7 test files.

### Generation
There are five types of test files and two files of each type.
- Type 1: Each triplet is chosen uniformly randomly among all valid triplets.
- Type 2: For each valid $i$:
    - $a_i$ is chosen uniformly randomly among all 64-bit integers which contain at least 25 0-bits and at least 25 1-bits.
    - $b_i$ and $c_i$ are chosen uniformly randomly among all pairs of distinct 64-bit integers which only differs from $a_i$ in one or two bits.
- Type 3: For each valid $i$:
    - If $i = 1 + 8k$ for some integer $k$, an unsigned integer $d$ ($1 \le d \lt 2^{63}$) is chosen uniformly randomly. This integer is used for this triplet and the next seven triplets.
    - First, $a_i$ is chosen uniformly randomly; $b_i = a_i + d$ and $c_i = a_i + 2d$. If $c_i \ge 2^{64}$, $a_i$ is chosen uniformly randomly again and $b_i$ and $c_i$ are updated.
    - This process is repeated until $c_i \lt 2^{64}$.
- Type 4:
    - First, three 64-bit unsigned integers are chosen uniformly randomly and assigned to three registers. The fourth register is unused; we may assume that it does not exist. Consider the following program which generates a list $L$:
        - If $L$ contains $9N$ integers, terminate.
        - Randomly choose two registers in some order. Randomly choose to use the whole registers or their lower 32 bits.
        - Randomly choose one of the instructions `xor`, `and`, `or`, `add` or `sub` and execute it with the chosen registers as operands.
        - Add the values in the three registers (in a fixed order) to the list $L$.
    - Consider every third element of the list $L$. The first three of these integers form the first triplet, the next three form the second triplet and so on.
    - While any triplet contains two equal elements, this process is repeated and the triplets regenerated.
- Type 5:
    - A 64-bit unsigned integer $K$ is chosen uniformly randomly.
    - Each triplet is chosen uniformly randomly among all valid triplets with sum of all three elements equal to $K$.

### Example Input 1
```
3
255 2 4
1 0 3
2 6 3
```

### Example Output 1
```
10
dec al
inc rcx
inc ecx
mov rdx rcx
add rcx rdx
add rcx rdx
mov rbx rcx
div rbx rdx
div rdx rdx
div rcx rax
```

### Example Input 2
```
1
18446743995541146810 18446743995541146811 18446743995541146809
```

### Example Output 2
```
13
dec ebx
add bx bx
mul rbx rbx
not ebx
sub eax ebx
div ebx eax
mul ebx ebx
sub ebx eax
mul rax rbx
mov rdx rax
dec rax
mov rbx rax
dec rbx
```

### Explanation
Note that $N \neq 64$ to keep the input short. This constraint holds for all input files.

**Example case 1:** The 64-bit values stored in the registers `(rax, rbx, rcx, rdx)` after each instruction is executed are as follows:
```
dec al                 (255, 0, 0, 0)
inc rcx                (255, 0, 1, 0)
inc ecx                (255, 0, 2, 0)
mov rdx rcx            (255, 0, 2, 2)
add rcx rdx            (255, 0, 4, 2) ― the first triplet appears
add rcx rdx            (255, 0, 6, 2)
mov rbx rcx            (255, 6, 6, 2)
div rbx rdx            (255, 3, 6, 2) ― the third triplet appears
div rdx rdx            (255, 3, 6, 1)
div rcx rax            (255, 3, 0, 1) ― the second triplet appears
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>