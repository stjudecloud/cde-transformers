<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum FileType implements ArrayAccess
{
    use ValidatorTrait;
    case ADF;
    case AVI;
    case BAI;
    case BAM;
    case BCR_BIOTAB;
    case BED;
    case BEDGRAPH;
    case BEDPE_FORMAT;
    case BIGBED;
    case BIGWIG;
    case BINARY_FORMAT;
    case BIOM;
    case CEL;
    case CRAI;
    case CRAM;
    case CSV;
    case DICOM;
    case DOCX;
    case DSV;
    case FASTA;
    case FASTQ;
    case GCT_RES_FORMAT;
    case GENBANK_FORMAT;
    case GFF3;
    case GPR;
    case GTF;
    case GVCF;
    case GZIP_FORMAT;
    case HDF5;
    case HIC;
    case HTML;
    case HTSEQ;
    case IDAT;
    case IDF;
    case JPEG;
    case JPEG_2000;
    case JSON;
    case MAF;
    case MAGE_TAB;
    case MAT;
    case MATLAB_SCRIPT;
    case MEX;
    case MPEG_4;
    case MTX;
    case MZIDENTML;
    case MZML;
    case MZXML;
    case NIFTI_FORMAT;
    case OME_TIFF;
    case PDF;
    case PLAIN_TEXT_DATA_FORMAT;
    case PNG;
    case PYTHON_SCRIPT_FORMAT;
    case R_FILE_FORMAT;
    case R_MARKDOWN;
    case SDRF;
    case SEQUENCE_RECORD_FORMAT;
    case SVG;
    case SVS;
    case TAR;
    case THERMO_RAW;
    case TIFF;
    case TSV;
    case TXT;
    case VCF;
    case XLS;
    case XLSX;
    case XML;
    case YAML;
    case ZIP;

    const CDE_ID = 11416926;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=11416926%20and%20ver_nr=1.0';

    const DESCRIPTION = 'A defined organization or layout representing and structuring data in a computer file.';

    const CDE_VERSION = 1;

    private const DATA = [
        'ADF' => [
            'value' => self::ADF,
            'permissible_value' => 'ADF',
            'long_name' => 'Array Design Format',
            'public_id' => 11421996,
            'concept_code' => 'C172213',
            'description' => 'A tab-delimited file defining how each array in an investigation is used. 
This data includes what sequence is located at each position in an array 
and what the annotation of this sequence is; cross-references to entries in 
a public repository can be used if available.',
        ],
        'AVI' => [
            'value' => self::AVI,
            'permissible_value' => 'AVI',
            'long_name' => 'AVI Format',
            'public_id' => 11421997,
            'concept_code' => 'C190162',
            'description' => 'A multimedia container format for audio video interleaved (AVI) files that 
allows for synchronous audio-with-video playback.',
        ],
        'BAI' => [
            'value' => self::BAI,
            'permissible_value' => 'BAI',
            'long_name' => 'BAI File',
            'public_id' => 11421998,
            'concept_code' => 'C190163',
            'description' => 'An index file found in the same directory as the binary alignment map (BAM) 
file, a compressed binary version of a sequence alignment/map (SAM) file.',
        ],
        'BAM' => [
            'value' => self::BAM,
            'permissible_value' => 'BAM',
            'long_name' => 'Binary Alignment Map',
            'public_id' => 6356231,
            'concept_code' => 'C153249',
            'description' => 'A binary representation of a sequence alignment map (SAM), a compact and 
indexable representation of nucleotide sequence alignments, compressed by 
the BGZF (Blocked GNU Zip Format) library.',
        ],
        'BCR Biotab' => [
            'value' => self::BCR_BIOTAB,
            'permissible_value' => 'BCR Biotab',
            'long_name' => 'BCR Biotab Format',
            'public_id' => 11421999,
            'concept_code' => 'C190164',
            'description' => 'Files that consist of aggregate clinical and biospecimen data across all 
cases of the given project. Biotab files are supplemental files that are 
available in the Genomic Data Commons (GDC) Legacy Archive as tab-delimited 
files on a project level basis. These may also include fields that are not 
available in the GDC application programming interface (API).',
        ],
        'BED' => [
            'value' => self::BED,
            'permissible_value' => 'BED',
            'long_name' => 'BED Format',
            'public_id' => 11422000,
            'concept_code' => 'C153367',
            'description' => 'A tab-delimited text file format that allows the specification of the 
sequence data that is displayed in an annotation track. The minimum 
required information is chromosome, start position, and end position.',
        ],
        'bedgraph' => [
            'value' => self::BEDGRAPH,
            'permissible_value' => 'bedgraph',
            'long_name' => 'Bedgraph Format',
            'public_id' => 11422001,
            'concept_code' => 'C190165',
            'description' => 'A format that allows display of continuous-valued data in track format. 
This display type is useful for probability scores and transcriptome data.',
        ],
        'BEDPE Format' => [
            'value' => self::BEDPE_FORMAT,
            'permissible_value' => 'BEDPE Format',
            'long_name' => 'BEDPE Format',
            'public_id' => 14535229,
            'concept_code' => 'C184749',
            'description' => 'A text file format used to store genomic paired-end sequencing data that 
includes coordinates and associated metadata.',
        ],
        'bigBed' => [
            'value' => self::BIGBED,
            'permissible_value' => 'bigBed',
            'long_name' => 'BigBed Format',
            'public_id' => 11422002,
            'concept_code' => 'C190166',
            'description' => 'A format for large sequence annotation tracks, similar to the textual 
browser extensible data (BED) format. The annotated items can be either 
simple or a linked collection of exons.',
        ],
        'bigWig' => [
            'value' => self::BIGWIG,
            'permissible_value' => 'bigWig',
            'long_name' => 'BigWig Format',
            'public_id' => 11422003,
            'concept_code' => 'C190167',
            'description' => 'A format for large sequence annotation tracks that consist of a value for 
each sequence position, similar to the textual wiggle (WIG) format.',
        ],
        'Binary Format' => [
            'value' => self::BINARY_FORMAT,
            'permissible_value' => 'Binary Format',
            'long_name' => 'Binary Format',
            'public_id' => 11422004,
            'concept_code' => 'C190168',
            'description' => 'A file format in which file information is stored in the form of ones and 
zeros. It can be easily converted to text representations for visualization 
and editing.',
        ],
        'BIOM' => [
            'value' => self::BIOM,
            'permissible_value' => 'BIOM',
            'long_name' => 'BIOM Format',
            'public_id' => 11422059,
            'concept_code' => 'C190169',
            'description' => 'A general-use format for representing biological sample by observation 
contingency tables. It is designed for general use in broad areas of 
comparative -omics. The primary use of this format is to represent 
operational taxonomic unit (OTU) and metagenome tables.',
        ],
        'CEL' => [
            'value' => self::CEL,
            'permissible_value' => 'CEL',
            'long_name' => 'Affymetrix CEL Format',
            'public_id' => 12135194,
            'concept_code' => 'C191737',
            'description' => 'A type of file that stores the results of intensity calculations of pixel 
values for DNA microarray image analysis. The data includes an intensity 
value, standard deviation of the intensity, the number of pixels used to 
calculate the intensity value, a flag to indicate an outlier as calculated 
by the algorithm, and a user defined flag indicating whether the feature 
should be excluded from future analysis. The file also stores the 
previously stated data for each feature on the probe array.',
        ],
        'CRAI' => [
            'value' => self::CRAI,
            'permissible_value' => 'CRAI',
            'long_name' => 'CRAI File',
            'public_id' => 12517496,
            'concept_code' => 'C192224',
            'description' => 'An external index file created by the sequencing data archive alongside a 
compressed reference-oriented alignment map (CRAM) file. This index file is 
available in the same directory as the CRAM file and is required for 
selective access to the genomic sequence alignment data within the CRAM 
file.',
        ],
        'CRAM' => [
            'value' => self::CRAM,
            'permissible_value' => 'CRAM',
            'long_name' => 'CRAM Format',
            'public_id' => 11422061,
            'concept_code' => 'C190170',
            'description' => 'A more highly compressed alternative to the BAM and SAM DNA sequence 
alignment file formats. It uses reference based compression, with only base 
calls that differ from a designated reference sequence being stored.',
        ],
        'CSV' => [
            'value' => self::CSV,
            'permissible_value' => 'CSV',
            'long_name' => 'Comma Separated Values Format',
            'public_id' => 7797849,
            'concept_code' => 'C182456',
            'description' => 'A text file format that separates data elements with commas.',
        ],
        'DICOM' => [
            'value' => self::DICOM,
            'permissible_value' => 'DICOM',
            'long_name' => 'DICOM',
            'public_id' => 2967848,
            'concept_code' => 'C49059',
            'description' => 'A comprehensive set of standards for communications between medical imaging 
devices, including handling, storing and transmitting information in 
medical imaging. It includes a file format definition and a network 
communication protocol.',
        ],
        'DOCX' => [
            'value' => self::DOCX,
            'permissible_value' => 'DOCX',
            'long_name' => 'DOCX Format',
            'public_id' => 11422062,
            'concept_code' => 'C190171',
            'description' => 'A file type that uses Open XML Document format to store data for Microsoft 
Word and other compatible programs.',
        ],
        'DSV' => [
            'value' => self::DSV,
            'permissible_value' => 'DSV',
            'long_name' => 'DSV Format',
            'public_id' => 11422063,
            'concept_code' => 'C190172',
            'description' => 'A delimiter-separated values file that contains plain text data divided 
into rows and columns by a designated special character.',
        ],
        'FASTA' => [
            'value' => self::FASTA,
            'permissible_value' => 'FASTA',
            'long_name' => 'FASTA Format',
            'public_id' => 11422064,
            'concept_code' => 'C47845',
            'description' => 'A sequence in FASTA format consists of a single-line description, followed 
by lines of sequence data. The first character of the description line is a 
greater-than (">") symbol in the first column. Sequences are represented in 
the standard IUB/IUPAC single letter amino acid and nucleic acid codes, 
with a single hyphen or dash being used to represent a gap of indeterminate 
length; in amino acid sequences asterix ("*") can represent a translation 
stop.',
        ],
        'FASTQ' => [
            'value' => self::FASTQ,
            'permissible_value' => 'FASTQ',
            'long_name' => 'Investigation Description Format',
            'public_id' => 11422065,
            'concept_code' => 'C172212',
            'description' => 'A a tab-delimited containing information about an investigation, including 
its name, a description, the investigator\'s contact details, bibliographic 
references, and free text descriptions of any relevant protocols.',
        ],
        'GCT/Res Format' => [
            'value' => self::GCT_RES_FORMAT,
            'permissible_value' => 'GCT/Res Format',
            'long_name' => 'GCT/RES Format',
            'public_id' => 11422066,
            'concept_code' => 'C190173',
            'description' => 'A tab-delimited text file that contains gene expression data as a column 
for each sample, a row for each gene, and an expression value for each gene 
in each sample. RES differs from GCT by having labels for each gene\'s 
absent (A) versus present (P) calls as generated by Affymetrix\'s GeneChip 
software.',
        ],
        'GenBank Format' => [
            'value' => self::GENBANK_FORMAT,
            'permissible_value' => 'GenBank Format',
            'long_name' => 'GenBank Format',
            'public_id' => 11422129,
            'concept_code' => 'C190174',
            'description' => 'A type of flat file format that allows for the storage of DNA or protein 
sequences and annotations. It consists of an annotation section and a 
sequence section.',
        ],
        'GFF3' => [
            'value' => self::GFF3,
            'permissible_value' => 'GFF3',
            'long_name' => 'General Feature Format Version 3',
            'public_id' => 11422130,
            'concept_code' => 'C190175',
            'description' => 'A tab-separated format for sequence data. It uses one line per feature, 
each containing 9 columns of data, plus optional track definition lines.',
        ],
        'GPR' => [
            'value' => self::GPR,
            'permissible_value' => 'GPR',
            'long_name' => 'GenePix Results Format',
            'public_id' => 11422131,
            'concept_code' => 'C190176',
            'description' => 'A tab-delimited text file format developed by Axon Instruments and used to 
export data from the microarray image analysis tool GenePix.',
        ],
        'GTF' => [
            'value' => self::GTF,
            'permissible_value' => 'GTF',
            'long_name' => 'GTF Format',
            'public_id' => 11422132,
            'concept_code' => 'C190177',
            'description' => 'A tab-delimited text format based on the general feature format (GFF) but 
which also contains some additional information for each gene.',
        ],
        'gVCF' => [
            'value' => self::GVCF,
            'permissible_value' => 'gVCF',
            'long_name' => 'Genomic Variant Call Format',
            'public_id' => 14818706,
            'concept_code' => 'C204352',
            'description' => 'A text file format used for storing gene sequence variations. It is a type 
of variant call format that has a record for all sites, whether there is a 
variant call there or not. The format includes metrics of the confidence 
that positions are actually non-variant vs. a factor of minimum read-depth 
and genotype quality.',
        ],
        'GZIP Format' => [
            'value' => self::GZIP_FORMAT,
            'permissible_value' => 'GZIP Format',
            'long_name' => 'Gzip File Format',
            'public_id' => 2929849,
            'concept_code' => 'C80220',
            'description' => 'A file format consisting of a 10-byte header containing a magic number, a 
version number, and a timestamp, a Deflate-compressed body, and an 8-byte 
footer containing a checksum and the length of the original uncompressed 
data.',
        ],
        'HDF5' => [
            'value' => self::HDF5,
            'permissible_value' => 'HDF5',
            'long_name' => 'Hierarchical Data Format 5',
            'public_id' => 11422133,
            'concept_code' => 'C184763',
            'description' => 'A hierarchical, filesystem-like data format that can store metadata in the 
form of user-defined, named attributes, which are attached to groups and 
datasets, and representations of images and tables built up using datasets, 
groups and attributes.',
        ],
        'HIC' => [
            'value' => self::HIC,
            'permissible_value' => 'HIC',
            'long_name' => 'HIC File Format',
            'public_id' => 14728934,
            'concept_code' => 'C203672',
            'description' => 'An indexed binary format designed to permit fast random access to contact 
matrix heatmaps.',
        ],
        'HTML' => [
            'value' => self::HTML,
            'permissible_value' => 'HTML',
            'long_name' => 'Hypertext Markup Language',
            'public_id' => 11422134,
            'concept_code' => 'C142380',
            'description' => 'A standard markup language used to display content on a web page, as 
specified by the World Wide Web Consortium (W3C).',
        ],
        'HTSEQ' => [
            'value' => self::HTSEQ,
            'permissible_value' => 'HTSeq Count',
            'long_name' => 'HTSeq-Count Output Format',
            'public_id' => 11422133,
            'concept_code' => 'C184763',
            'description' => 'A tab-delimited file generated by the HTSeq Count software tool. The file represents the number of reads obtained during high-throughput sequencing that map to known genomic sequences. The data is represented in two columns, one containing an identifier for a genomic feature, which can be a database-supplied identifier or a gene symbol, followed by a second column containing the number of mapped reads.',
        ],
        'IDAT' => [
            'value' => self::IDAT,
            'permissible_value' => 'IDAT',
            'long_name' => 'IDAT Format',
            'public_id' => 11495707,
            'concept_code' => 'C184762',
            'description' => 'A proprietary, encrypted XML-based, compressed electronic file format from 
Illumina Inc. for storing genome-wide profiling data. The data contains a 
summary of the intensity data generated from each probe used during a 
sequencing run.',
        ],
        'IDF' => [
            'value' => self::IDF,
            'permissible_value' => 'IDF',
            'long_name' => 'Investigation Description Format',
            'public_id' => 11422065,
            'concept_code' => 'C172212',
            'description' => 'A a tab-delimited containing information about an investigation, including 
its name, a description, the investigator\'s contact details, bibliographic 
references, and free text descriptions of any relevant protocols.',
        ],
        'JPEG' => [
            'value' => self::JPEG,
            'permissible_value' => 'JPEG',
            'long_name' => 'JPEG',
            'public_id' => 11422138,
            'concept_code' => 'C48230',
            'description' => 'A file compression format mostly used for color and greyscale photographs.',
        ],
        'JPEG 2000' => [
            'value' => self::JPEG_2000,
            'permissible_value' => 'JPEG 2000',
            'long_name' => 'JPEG 2000 Format',
            'public_id' => 11422135,
            'concept_code' => 'C184768',
            'description' => 'A discrete wavelet transform (DWT)-based compression standard electronic 
file format for storing video images.',
        ],
        'JSON' => [
            'value' => self::JSON,
            'permissible_value' => 'JSON',
            'long_name' => 'JSON Format',
            'public_id' => 11422136,
            'concept_code' => 'C184769',
            'description' => 'A common open standard file format and data interchange format that uses 
human-readable text consisting of attribute-value pairs and arrays to store 
and transmit data.',
        ],
        'MAF' => [
            'value' => self::MAF,
            'permissible_value' => 'MAF',
            'long_name' => 'Mutation Annotation Format',
            'public_id' => 11422137,
            'concept_code' => 'C172215',
            'description' => 'A tab-delimited text file containing mutation information aggregated from 
variant call files (VCF) across a project, trial or study.',
        ],
        'MAGE-TAB' => [
            'value' => self::MAGE_TAB,
            'permissible_value' => 'MAGE-TAB',
            'long_name' => 'MAGE-TAB',
            'public_id' => 2953599,
            'concept_code' => 'C82937',
            'description' => 'A tab-delimited, spreadsheet-based format that can be used for annotating 
and communicating microarray data in a MIAME (Minimum Information About a 
Microarray Experiment) compliant fashion.',
        ],
        'MAT' => [
            'value' => self::MAT,
            'permissible_value' => 'MAT',
            'long_name' => 'MAT Format',
            'public_id' => 11422139,
            'concept_code' => 'C190178',
            'description' => 'A proprietary, binary data container format used by MATLAB software to 
store workspace variables.',
        ],
        'MATLAB Script' => [
            'value' => self::MATLAB_SCRIPT,
            'permissible_value' => 'MATLAB Script',
            'long_name' => 'MATLAB Script File',
            'public_id' => 11422140,
            'concept_code' => 'C190179',
            'description' => 'A file that contains MATLAB commands and function calls.',
        ],
        'MEX' => [
            'value' => self::MEX,
            'permissible_value' => 'MEX',
            'long_name' => 'MEX Format',
            'public_id' => 14532371,
            'concept_code' => 'C184778',
            'description' => 'A minimal base ASCII file format to facilitate the exchange of data 
matrices.',
        ],
        'MPEG-4' => [
            'value' => self::MPEG_4,
            'permissible_value' => 'MPEG-4',
            'long_name' => 'MP4 Format',
            'public_id' => 11422141,
            'concept_code' => 'C190180',
            'description' => 'A multimedia file that is commonly used to store video and audio data.',
        ],
        'mtx' => [
            'value' => self::MTX,
            'permissible_value' => 'mtx',
            'long_name' => 'mtx',
            'public_id' => 14534322,
            'concept_code' => 'C201789',
            'description' => 'A format for the storage of numerical or pattern matrices in a dense (array 
format) or sparse (coordinate format) representation.',
        ],
        'mzIdentML' => [
            'value' => self::MZIDENTML,
            'permissible_value' => 'mzIdentML',
            'long_name' => 'mzIdentML',
            'public_id' => 14534321,
            'concept_code' => 'C201788',
            'description' => 'An exchange format for peptides and proteins identified from mass spectra.',
        ],
        'mzML' => [
            'value' => self::MZML,
            'permissible_value' => 'mzML',
            'long_name' => 'Mass Spectrometry Markup Language',
            'public_id' => 11422142,
            'concept_code' => 'C190181',
            'description' => 'An open-source format for mass spectrometer output files that was designed 
to be utilized and adapted as advances in mass spectrometry technology 
proceed. This was standardized by the Human Proteome Organization 
(HUPO)-Proteomics Standards Initiative (PSI) Mass Spectrometry Standards 
(MSS) Working Group.',
        ],
        'mzXML' => [
            'value' => self::MZXML,
            'permissible_value' => 'mzXML',
            'long_name' => 'Mass Spectrometry Extensible Markup Language',
            'public_id' => 11422143,
            'concept_code' => 'C47924',
            'description' => 'An XML based common file format for mass spectrometry data.',
        ],
        'NIFTI Format' => [
            'value' => self::NIFTI_FORMAT,
            'permissible_value' => 'NIFTI Format',
            'long_name' => 'NIfTI Format',
            'public_id' => 11422144,
            'concept_code' => 'C190183',
            'description' => 'An open file format used to store neuroscience and neuroradiology imaging 
data obtained by MRI. The raw image data in NIfTI is saved as a 3d image.',
        ],
        'OME-TIFF' => [
            'value' => self::OME_TIFF,
            'permissible_value' => 'OME-TIFF',
            'long_name' => 'Open Microscopy Environment Tagged Image File Format',
            'public_id' => 11422196,
            'concept_code' => 'C181618',
            'description' => 'A tagged image file format (TIFF) image file format that contains an Open 
Microscopy Environment (OME) XML metadata block in the file header for 
storing microscopy information (pixels and metadata) using the OME Data 
Model.',
        ],
        'PDF' => [
            'value' => self::PDF,
            'permissible_value' => 'PDF',
            'long_name' => 'Portable Document Format',
            'public_id' => 2967828,
            'concept_code' => 'C63805',
            'description' => 'An open file format created and controlled by Adobe Systems, for 
representing two-dimensional documents in a device independent and 
resolution independent fixed-layout document format. Each PDF file 
encapsulates a complete description of a 2D document that includes the 
text, fonts, images, and 2D vector graphics that compose the document. PDF 
files do not encode information that is specific to the application 
software, hardware, or operating system used to create or view the 
document. This feature ensures that a valid PDF will render exactly the 
same regardless of its origin or destination (but depending on font 
availability when fonts are not encapsulated in the file).',
        ],
        'Plain Text Data Format' => [
            'value' => self::PLAIN_TEXT_DATA_FORMAT,
            'permissible_value' => 'Plain Text Data Format',
            'long_name' => 'Plain Text Data Format',
            'public_id' => 11422197,
            'concept_code' => 'C85873',
            'description' => 'A data format consisting of readable textual material maintained as a 
sequential file.',
        ],
        'PNG' => [
            'value' => self::PNG,
            'permissible_value' => 'PNG',
            'long_name' => 'Portable Network Graphics',
            'public_id' => 11422198,
            'concept_code' => 'C85437',
            'description' => 'An extensible file format for lossless data compression of images.',
        ],
        'Python Script Format' => [
            'value' => self::PYTHON_SCRIPT_FORMAT,
            'permissible_value' => 'Python Script Format',
            'long_name' => 'Python Script Format',
            'public_id' => 11422199,
            'concept_code' => 'C190184',
            'description' => 'A plain text file that stores python code.',
        ],
        'R File Format' => [
            'value' => self::R_FILE_FORMAT,
            'permissible_value' => 'R File Format',
            'long_name' => 'R Format',
            'public_id' => 11422200,
            'concept_code' => 'C190186',
            'description' => 'A file format used for writing scripts in the R programming language for 
execution within the R software environment, typically for statistical 
computation and graphics.',
        ],
        'R Markdown' => [
            'value' => self::R_MARKDOWN,
            'permissible_value' => 'R Markdown',
            'long_name' => 'R Markdown Format',
            'public_id' => 11422201,
            'concept_code' => 'C190187',
            'description' => 'A file format for making dynamic documents written in R. It is written in 
plain text format and contains chunks of embedded R code.',
        ],
        'SDRF' => [
            'value' => self::SDRF,
            'permissible_value' => 'SDRF',
            'long_name' => 'Sample and Data Relationship Format',
            'public_id' => 11422202,
            'concept_code' => 'C172211',
            'description' => 'A tab-delimited file describing the relationships between samples, arrays, 
data and other objects used or produced during a microarray experiment.',
        ],
        'Sequence Record Format' => [
            'value' => self::SEQUENCE_RECORD_FORMAT,
            'permissible_value' => 'Sequence Record Format',
            'long_name' => 'Sequence Record Format',
            'public_id' => 11422203,
            'concept_code' => 'C190188',
            'description' => 'Any file format designed to store molecular sequence data.',
        ],
        'SVG' => [
            'value' => self::SVG,
            'permissible_value' => 'SVG',
            'long_name' => 'Scalable Vector Graphics',
            'public_id' => 11422204,
            'concept_code' => 'C85435',
            'description' => 'A specification for describing vector graphics using extensible markup 
language.',
        ],
        'SVS' => [
            'value' => self::SVS,
            'permissible_value' => 'SVS',
            'long_name' => 'Spectral View Settings Format',
            'public_id' => 11426797,
            'concept_code' => 'C172214',
            'description' => 'An electronic file format based on TIFF that is used for storing multiple 
high-resolution images in a single electronic file.',
        ],
        'TAR' => [
            'value' => self::TAR,
            'permissible_value' => 'TAR',
            'long_name' => 'TAR Format',
            'public_id' => 11426798,
            'concept_code' => 'C190189',
            'description' => 'A file format generated by the Unix command-line utility tar (tape 
archive). It is used for collecting many files into one archive file.',
        ],
        'Thermo RAW' => [
            'value' => self::THERMO_RAW,
            'permissible_value' => 'Thermo RAW',
            'long_name' => 'Thermo RAW Format',
            'public_id' => 11426799,
            'concept_code' => 'C190190',
            'description' => 'A proprietary file format developed by Thermo Scientific to capture mass 
spectrometry data produced by Thermo mass spectrometers.',
        ],
        'TIFF' => [
            'value' => self::TIFF,
            'permissible_value' => 'TIFF',
            'long_name' => 'TIFF',
            'public_id' => 11426800,
            'concept_code' => 'C70631',
            'description' => 'A bitmap graphics file format utilizing tagged fields.',
        ],
        'TSV' => [
            'value' => self::TSV,
            'permissible_value' => 'TSV',
            'long_name' => 'Tab-Separated Value Format',
            'public_id' => 11426801,
            'concept_code' => 'C164049',
            'description' => 'A file format where each line in the file contains a single piece of data 
and where each field or value in a line of data is separated from the next 
by a tab character.',
        ],
        'TXT' => [
            'value' => self::TXT,
            'permissible_value' => 'TXT',
            'long_name' => 'Plain Text Data Format',
            'public_id' => 11422197,
            'concept_code' => 'C85873',
            'description' => 'A data format consisting of readable textual material maintained as a 
sequential file.',
        ],
        'VCF' => [
            'value' => self::VCF,
            'permissible_value' => 'VCF',
            'long_name' => 'Variant Call File Format',
            'public_id' => 11426802,
            'concept_code' => 'C172216',
            'description' => 'A text-based electronic file used for storing gene sequence variation data. 
The first text section is composed of a header containing the metadata and 
keywords used in the file. This is followed by the body of the file which 
is tab-separated into eight mandatory data columns for each sample. 
Additionally, the body of the file can include an unlimited number of 
optional columns to record other sample-related data.',
        ],
        'XLS' => [
            'value' => self::XLS,
            'permissible_value' => 'XLS',
            'long_name' => 'XLS Format',
            'public_id' => 11426803,
            'concept_code' => 'C190191',
            'description' => 'A proprietary binary file format used to store spreadsheet data in 
Microsoft Excel.',
        ],
        'XLSX' => [
            'value' => self::XLSX,
            'permissible_value' => 'XLSX',
            'long_name' => 'Excel Open XML Format',
            'public_id' => 11426804,
            'concept_code' => 'C164050',
            'description' => 'A proprietary file format developed by Microsoft that allows the user to 
save a spreadsheet created in Excel in an open XML-format. The file then 
can be read and opened by other spreadsheet-compatible applications.',
        ],
        'XML' => [
            'value' => self::XML,
            'permissible_value' => 'XML',
            'long_name' => 'Extensible Markup Language',
            'public_id' => 2581637,
            'concept_code' => 'C45967',
            'description' => 'Extensible Markup Language',
        ],
        'YAML' => [
            'value' => self::YAML,
            'permissible_value' => 'YAML',
            'long_name' => 'YAML Language',
            'public_id' => 11426805,
            'concept_code' => 'C190193',
            'description' => 'A human-readable, tree-structured data-serialization language often used to 
create configuration files.',
        ],
        'ZIP' => [
            'value' => self::ZIP,
            'permissible_value' => 'ZIP',
            'long_name' => 'ZIP Format',
            'public_id' => 11426806,
            'concept_code' => 'C190192',
            'description' => 'An archive file format that supports lossless data compression. It is used 
to compress one or more files together into a single location.',
        ],
    ];
}
