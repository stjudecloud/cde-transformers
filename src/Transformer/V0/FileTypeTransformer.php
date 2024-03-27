<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\FileType;

/**
 * @method static string|null|FileType transform($permissibleValue, $key = null)
 */
class FileTypeTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => FileType::HIC,
            'regex' => '/^(hic)$/i',
        ],
        [
            'value' => FileType::BEDPE_FORMAT,
            'regex' => '/^(bedpe format)$/i',
        ],
        [
            'value' => FileType::MTX,
            'regex' => '/^(mtx)$/i',
        ],
        [
            'value' => FileType::MZIDENTML,
            'regex' => '/^(mzidentml)$/i',
        ],
        [
            'value' => FileType::MEX,
            'regex' => '/^(mex)$/i',
        ],
        [
            'value' => FileType::CRAI,
            'regex' => '/^(crai)$/i',
        ],
        [
            'value' => FileType::CEL,
            'regex' => '/^(cel)$/i',
        ],
        [
            'value' => FileType::MZXML,
            'regex' => '/^(mzxml)$/i',
        ],
        [
            'value' => FileType::IDAT,
            'regex' => '/^(idat)$/i',
        ],
        [
            'value' => FileType::IDF,
            'regex' => '/^(idf)$/i',
        ],
        [
            'value' => FileType::JPEG,
            'regex' => '/^(jpeg)$/i',
        ],
        [
            'value' => FileType::JPEG_2000,
            'regex' => '/^(jpeg 2000)$/i',
        ],
        [
            'value' => FileType::JSON,
            'regex' => '/^(json)$/i',
        ],
        [
            'value' => FileType::MAF,
            'regex' => '/^(maf)$/i',
        ],
        [
            'value' => FileType::YAML,
            'regex' => '/^(yaml)$/i',
        ],
        [
            'value' => FileType::ZIP,
            'regex' => '/^(zip)$/i',
        ],
        [
            'value' => FileType::SVS,
            'regex' => '/^(svs)$/i',
        ],
        [
            'value' => FileType::TAR,
            'regex' => '/^(tar)$/i',
        ],
        [
            'value' => FileType::THERMO_RAW,
            'regex' => '/^(thermo raw)$/i',
        ],
        [
            'value' => FileType::TIFF,
            'regex' => '/^(tiff)$/i',
        ],
        [
            'value' => FileType::TSV,
            'regex' => '/^(tsv)$/i',
        ],
        [
            'value' => FileType::TXT,
            'regex' => '/^(txt)$/i',
        ],
        [
            'value' => FileType::VCF,
            'regex' => '/^(vcf)$/i',
        ],
        [
            'value' => FileType::XLS,
            'regex' => '/^(xls)$/i',
        ],
        [
            'value' => FileType::XLSX,
            'regex' => '/^(xlsx)$/i',
        ],
        [
            'value' => FileType::XML,
            'regex' => '/^(xml)$/i',
        ],
        [
            'value' => FileType::MATLAB_SCRIPT,
            'regex' => '/^(matlab script)$/i',
        ],
        [
            'value' => FileType::NIFTI_FORMAT,
            'regex' => '/^(nifti format)$/i',
        ],
        [
            'value' => FileType::R_MARKDOWN,
            'regex' => '/^(r markdown)$/i',
        ],
        [
            'value' => FileType::R_FILE_FORMAT,
            'regex' => '/^(r file format)$/i',
        ],
        [
            'value' => FileType::PYTHON_SCRIPT_FORMAT,
            'regex' => '/^(python script format)$/i',
        ],
        [
            'value' => FileType::SEQUENCE_RECORD_FORMAT,
            'regex' => '/^(sequence record format)$/i',
        ],
        [
            'value' => FileType::SVG,
            'regex' => '/^(svg)$/i',
        ],
        [
            'value' => FileType::OME_TIFF,
            'regex' => '/^(ome tiff)$/i',
        ],
        [
            'value' => FileType::PDF,
            'regex' => '/^(pdf)$/i',
        ],
        [
            'value' => FileType::PLAIN_TEXT_DATA_FORMAT,
            'regex' => '/^(plain text data format|txt)$/i',
        ],
        [
            'value' => FileType::PNG,
            'regex' => '/^(png)$/i',
        ],
        [
            'value' => FileType::SDRF,
            'regex' => '/^(sdrf)$/i',
        ],
        [
            'value' => FileType::MAGE_TAB,
            'regex' => '/^(mage tab)$/i',
        ],
        [
            'value' => FileType::MAT,
            'regex' => '/^(mat)$/i',
        ],
        [
            'value' => FileType::MPEG_4,
            'regex' => '/^(mpeg 4)$/i',
        ],
        [
            'value' => FileType::MZML,
            'regex' => '/^(mzml)$/i',
        ],
        [
            'value' => FileType::GENBANK_FORMAT,
            'regex' => '/^(genbank format)$/i',
        ],
        [
            'value' => FileType::GFF3,
            'regex' => '/^(gff3)$/i',
        ],
        [
            'value' => FileType::GPR,
            'regex' => '/^(gpr)$/i',
        ],
        [
            'value' => FileType::GTF,
            'regex' => '/^(gtf)$/i',
        ],
        [
            'value' => FileType::GZIP_FORMAT,
            'regex' => '/^(gzip format)$/i',
        ],
        [
            'value' => FileType::HDF5,
            'regex' => '/^(hdf5)$/i',
        ],
        [
            'value' => FileType::HTML,
            'regex' => '/^(html)$/i',
        ],
        [
            'value' => FileType::BIOM,
            'regex' => '/^(biom)$/i',
        ],
        [
            'value' => FileType::CRAM,
            'regex' => '/^(cram)$/i',
        ],
        [
            'value' => FileType::CSV,
            'regex' => '/^(csv)$/i',
        ],
        [
            'value' => FileType::DICOM,
            'regex' => '/^(dicom)$/i',
        ],
        [
            'value' => FileType::DOCX,
            'regex' => '/^(docx)$/i',
        ],
        [
            'value' => FileType::DSV,
            'regex' => '/^(dsv)$/i',
        ],
        [
            'value' => FileType::FASTA,
            'regex' => '/^(fasta)$/i',
        ],
        [
            'value' => FileType::FASTQ,
            'regex' => '/^(fastq)$/i',
        ],
        [
            'value' => FileType::GCT_RES_FORMAT,
            'regex' => '/^(gct res format)$/i',
        ],
        [
            'value' => FileType::AVI,
            'regex' => '/^(avi)$/i',
        ],
        [
            'value' => FileType::BAI,
            'regex' => '/^(bai)$/i',
        ],
        [
            'value' => FileType::BAM,
            'regex' => '/^(bam)$/i',
        ],
        [
            'value' => FileType::BCR_BIOTAB,
            'regex' => '/^(bcr biotab)$/i',
        ],
        [
            'value' => FileType::BED,
            'regex' => '/^(bed)$/i',
        ],
        [
            'value' => FileType::BEDGRAPH,
            'regex' => '/^(bedgraph)$/i',
        ],
        [
            'value' => FileType::BIGBED,
            'regex' => '/^(bigbed)$/i',
        ],
        [
            'value' => FileType::BIGWIG,
            'regex' => '/^(bigwig)$/i',
        ],
        [
            'value' => FileType::BINARY_FORMAT,
            'regex' => '/^(binary format)$/i',
        ],
        [
            'value' => FileType::ADF,
            'regex' => '/^(adf)$/i',
        ],
    ];
}
